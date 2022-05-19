<?php
//Controller

require_once("../autoload.php");
require_once("../app/helper/util.php");

use app\service\Cart;
use app\service\Order;

security();

//nao permitir entrar com o carrinho vazio
$cart = new Cart();
$cartData = $cart->getCart();
if (empty($cartData)) {
    redirect('');
}


//validar dados de entrada
$payment = !empty($_POST['payment']) ? $_POST['payment'] : '';
$type = !empty($_POST['rd_type']) ? $_POST['rd_type'] : '';

//atualizar o pagamento no carrinho
if (!empty($payment)) {
    $cart->setPayment($type, $payment);
}

//gerar pedido
$order = new Order();
$dataOrder = $order->createOrder();

//chamar o template com as variaveis setadas
echo template('loja/fechamento_pedido', ['dataOrder' => $dataOrder]);
