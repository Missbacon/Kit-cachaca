<?php
//Controller

require_once("../autoload.php");
require_once("../app/helper/util.php");

use app\service\Product;

$search = !empty($_GET['w']) ? $_GET['w'] : "";
$order = !empty($_GET['o']) ? $_GET['o'] : "";
$page = !empty($_GET['p']) ? $_GET['p'] : "";

$product = new Product();
$arrProduct = $product->search($search, $page, $order);

//chamar o template com as variaveis setadas
echo template('loja/main', ['arrProduct' => $arrProduct]);
