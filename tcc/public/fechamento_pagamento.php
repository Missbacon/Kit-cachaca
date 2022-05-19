<?php
//Controller

require_once("../autoload.php");
require_once("../app/helper/util.php");

use app\service\Cart;

security();

//nao permitir entrar com o carrinho vazio
$cart = new Cart();
$cartData = $cart->getCart();
if (empty($cartData)) {
    redirect('');
}


//chamar carrinho atualizado
$cartPayment = $cart->getPayment();

//chamar o template com as variaveis setadas
echo template('loja/fechamento_pagamento',
    [
        'cart' => $cartData,
        'cartPayment' => $cartPayment
    ]);