<?php

namespace app\repository;

use app\helper\BaseRepository;
use app\repository\OrderShipping;
use app\repository\OrderItem;
use app\repository\OrderPayment;
use app\repository\Customer;

class Order extends BaseRepository
{
    public function getTableName()
    {
        return "pedido";
    }

    public function loadOrderCustomer($idCustomer)
    {
        $pedidos = $this->loadByField('fk_cliente', $idCustomer);
        return $pedidos;
    }

    /**
     * Carregar os dados do pedido
     *
     * @param $id
     * @return array
     */
    public function loadOrderData($id)
    {
        $order = $this->loadById($id);

        $customer = new Customer();
        $orderCustomer = $customer->loadById($order['fk_cliente']);

        $orderItem = new OrderItem();
        $orderItems = $orderItem->loadItems($order['id']);

        $shipping = new OrderShipping();
        $orderShipping = $shipping->loadShipping($order['id']);

        $payment = new OrderPayment();
        $orderPayment = $payment->loadPayment($order['id']);

        return [
            'order' => [
                'data' => $order,
                'customer' => $orderCustomer
            ],
            'item' => $orderItems,
            'shipping' => $orderShipping,
            'payment' => $orderPayment
        ];
    }


    /**
     * Gerar um novo pedido
     *
     * @param $customer
     * @param $shipping
     * @param $item
     * @param $payment
     * @return array
     */
    public function createOrder($customer, $shipping, $arrItem, $payment)
    {
        $date = date('Y-m-d H:i');

        $orderNumber = mt_rand();

        $orderArr = [
            'pedido_numero' => $orderNumber,
            'data_atualizacao' => $date,
            'data_criacao' => $date,
            'fk_cliente' => $customer['id'],
            'status_pedido' => 'N',
        ];
        $this->insert($orderArr);
        $orderData = $this->loadByField('pedido_numero', $orderNumber);
        $newOrder = $orderData['0']['id'];


        foreach ($arrItem as $item) {
            $itemArr = [
                'data_atualizacao' => $date,
                'data_criacao' => $date,
                'fk_pedido' => $newOrder,
                'fk_produto' => $item['id'],
                'preco' => $item['price'],
                'quantidade' => $item['qty'],
                'sku' => $item['sku'],
                'valor_total_item' => $item['total'],
            ];
            $orderItem = new OrderItem();
            $orderItems = $orderItem->insert($itemArr);
        }

        $shippingArr = [
            'data_atualizacao' => $date,
            'data_criacao' => $date,
            'fk_cliente_endereco' => $shipping['id'],
            'fk_pedido' => $newOrder,
            'status_entrega' => 'N',
            'valor_entrega' => $shipping['value'],
        ];
        $shipping = new OrderShipping();
        $orderShipping = $shipping->insert($shippingArr);

        $paymentArr = [
            'data_atualizacao' => $date,
            'data_criacao' => $date,
            'fk_pedido' => $newOrder,
            'forma_pagamento' => $payment['method'],
            'valor_total_entrega' => $payment['total_shipping'],
            'valor_total_item' => $payment['total_item'],
            'valor_total_pedido' => $payment['total_order'],
            'info' => addslashes($payment['info']),
            'status_pagamento' => 'N',
        ];

        $payment = new OrderPayment();
        $orderPayment = $payment->insert($paymentArr);

        return $this->loadOrderData($newOrder);
    }
}