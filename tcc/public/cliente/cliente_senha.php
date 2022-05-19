<?php
//Controller

require_once ("../../app/helper/util.php");
security();

//chamar o template com as variaveis setadas
echo template('cliente/cliente_pedidos');
