<?php
//Controller

require_once("../autoload.php");
require_once("../app/helper/util.php");

use app\service\Cart;
use app\service\User;

security();

//nao permitir entrar com o carrinho vazio
$cart = new Cart();
$cartData = $cart->getCart();
if (empty($cartData)) {
    redirect('');
}

//validar dados de entrada
$idAddress = !empty($_GET['address']) ? $_GET['address'] : 0;


//atualizar o endereco no carrinho
if (!empty($idAddress)) {
    $cart->setAddress($idAddress);
}

//chamar carrinho atualizado
$cartAddress = $cart->getAddress();

//busca os dados do cliente
$user = new User();
$userData = $user->getUser();
$dataCustomer = $user->loadCustomer($userData['id']);

//chamar o template com as variaveis setadas
echo template('loja/fechamento_endereco',
    [
        'dataCustomer' => $dataCustomer,
        'cart' => $cartData,
        'cartAddress' => $cartAddress
    ]);
