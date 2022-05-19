<?php

namespace app\service;

use app\service\Product;

class Cart
{
    /**
     * Alterar carrinho
     *
     * @param $idProductAdd
     * @param $idProductRemove
     * @param $qty => 10001-2-ADD
     */
    public function alterCart($idProductAdd, $idProductRemove, $qty)
    {
        $cart = $_SESSION['cart'] ?? [];
        if (!empty($idProductAdd)) {
            $cart[$idProductAdd] = 1;
        }
        if (!empty($idProductRemove) && array_key_exists($idProductRemove, $cart)) {
            unset($cart[$idProductRemove]);
        }

        if (!empty($qty)) {
            $ex = explode("-", $qty);
            $idProduct = $ex[0];
            $qtyProduct = $ex[1];
            $cart[$idProduct] = $qtyProduct;
        }

        $_SESSION['cart'] = $cart;
    }


    /**
     * Dados do carrinho
     *
     * @return array
     */
    public function getCart()
    {
        $product = new Product();
        $cart = $_SESSION['cart'] ?? [];
        $arr = [];
        if (empty($cart)) {
            return [];
        }

        foreach ($cart as $k => $v) {
            $arr[$k] = [
                'product' => $product->loadProduct($k),
                'qty' => $v
            ];
        }
        return $arr;
    }


    public function getAddress()
    {
        $add = $_SESSION['cart_address'] ?? 0;
        return $add;
    }

    public function setAddress($idAddress)
    {
        $_SESSION['cart_address'] = $idAddress;
    }


    public function getPayment()
    {
        $add = $_SESSION['payment'] ?? '';
        return $add;
    }

    public function setPayment($type, $dataPayment)
    {
        if ($type === 'CARTAO_CREDITO') {
            $pay = [
                'type' => $type,
                'info' => $dataPayment['cc'],
            ];
        } else {
            $pay = [
                'type' => $type,
                'info' => $dataPayment['money']
            ];
        }

        $_SESSION['payment'] = $pay;
    }
}