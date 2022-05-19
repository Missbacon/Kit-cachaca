<?php
//Controller

require_once("../autoload.php");
require_once("../app/helper/util.php");

use app\service\Cart;

//validar dados de entrada
$idProductAdd = !empty($_GET['add']) ? $_GET['add'] : 0;
$idProductRemove = !empty($_GET['remove']) ? $_GET['remove'] : 0;
$qtd = !empty($_GET['qty']) ? $_GET['qty'] : '';

//alerar dados do carrinho
$cart = new Cart();
if (!empty($idProductAdd) || !empty($idProductRemove) || !empty($qtd)) {
    $cart->alterCart($idProductAdd, $idProductRemove, $qtd);
}

//chamar carrinho atualizado
$cart = $cart->getCart();

//chamar o template com as variaveis setadas
echo template('loja/carrinho', ['cart' => $cart]);
