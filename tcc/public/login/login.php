<?php
//Controller

require_once("../../autoload.php");
require_once("../../app/helper/util.php");

use app\service\User;

//validar dados de entrada
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    redirect('login/');
}

$user = new User();
$user->login($_POST['usuario'], $_POST['senha']);
