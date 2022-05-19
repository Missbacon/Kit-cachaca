<?php
//Controller

require_once("../../autoload.php");
require_once("../../app/helper/util.php");

use app\service\User;

$user = new User();
if (!empty($user->getUser())) {
    redirect('cliente/');
}

//chamar o template com as variaveis setadas
echo template('login/main');