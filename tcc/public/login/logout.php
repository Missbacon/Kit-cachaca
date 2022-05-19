<?php
//Controller

require_once("../../app/helper/util.php");
require_once("../../app/service/User.php");

use app\service\User;

$user = new User();
$user->logout();
