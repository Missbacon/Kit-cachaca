<?php
$server = $_SERVER['SCRIPT_FILENAME'];
$ex = explode("/", $server);
$page = array_pop($ex);
$pageNameArr = explode(".php", $page);
$pageName = $pageNameArr[0];
?>

<div class="col-4">
    <div class="list-group">

        <?php
        $menu = [
            ['NAME' => 'Dados Pessoais', 'ITEM' => 'index', 'PATH' => 'cliente',],
            ['NAME' => 'Contatos', 'ITEM' => 'cliente_contatos', 'PATH' => 'cliente/cliente_contatos.php',],
            ['NAME' => 'Endereço', 'ITEM' => 'cliente_endereco', 'PATH' => 'cliente/cliente_endereco.php',],
            ['NAME' => 'Pedidos', 'ITEM' => 'cliente_pedidos', 'PATH' => 'cliente/cliente_pedidos.php',],
            ['NAME' => 'Favoritos', 'ITEM' => 'cliente_favoritos', 'PATH' => 'cliente/cliente_favoritos.php',],
            ['NAME' => 'Alterar Senha', 'ITEM' => 'cliente_senha', 'PATH' => 'cliente/cliente_senha.php',],
            ['NAME' => 'Sair', 'ITEM' => 'logout', 'PATH' => 'login/logout.php',],
        ];
        foreach ($menu as $k) {
            $cls = ($pageName == $k['ITEM']) ? ' bg-danger text-light ' : '';

            echo '
               <a href="' . urlBase($k['PATH']) . '" class="list-group-item list-group-item-action ' . $cls . '">
            <i class="bi-person fs-6"></i> ' . $k['NAME'] . '
            </a>';
        }
        ?>
    </div>
</div>