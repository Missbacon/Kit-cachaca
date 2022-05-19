<?php

namespace app\service;

use app\service\Cart;
use app\service\User;
use app\repository\Order as ReOrder;

class Order
{
    public function createOrder()
    {
        $config = bootstrap();

        $user = new User();
        $userData = $user->getUser();

        $cart = new Cart();
        $ssCart = $cart->getCart();
        $ssAddress = $cart->getAddress();
        $ssPayment = $cart->getPayment();

        $ttItem = 0;
        $product = [];
        foreach ($ssCart as $item) {
            $vl = $item['product']['price']['preco'];
            $qty = $item['qty'];
            $tt = ($vl * $qty);
            $product[] = [
                'id' => $item['product']['data']['id'],
                'sku' => $item['product']['data']['sku'],
                'price' => $vl,
                'qty' => $qty,
                'total' => $tt
            ];
            $ttItem = ($ttItem + $tt);
        }

        $customer = [
            'id' => $userData['id']
        ];
        $shipping = [
            'id' => $ssAddress,
            'value' => $config['ORDER']['VALUE_DEFAULT_SHIPPING'],
        ];
        $payment = [
            'method' => $ssPayment['type'],
            'info' => json_encode($ssPayment),
            'total_shipping' => $shipping['value'],
            'total_item' => $ttItem,
            'total_order' => ($shipping['value'] + $ttItem),
        ];

        $reOrder = new ReOrder();
        $order = $reOrder->createOrder($customer, $shipping, $product, $payment);

        //clear session
        $_SESSION['cart_address'] = false;
        $_SESSION['payment'] = false;
        $_SESSION['cart'] = [];

        return $order;
    }
}