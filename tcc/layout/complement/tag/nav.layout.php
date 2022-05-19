<?php
$dataInfo = bootstrap()['STORE_INFO'];

$isUserLogin = !empty($_SESSION['usuario'] ?? null);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg border-bottom shadow-sm mb-3">
    <div class="container">
        <a href="<?= urlBase('') ?>">
            <img class="logo" src="<?= urlBase($dataInfo['LOGO']['2']) ?>" alt="Kit Cachaça - Logo">
        </a>

        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= urlBase('') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= urlBase('empresa/contato.php') ?>">Contato</a>
                </li>
            </ul>
            <div class="align-self-end">
                <ul class="navbar-nav">
                    <?php if (!$isUserLogin) { ?>
                        <li class="texto" class="nav-item">
                            <a href="<?= urlBase('login/login_cadastro.php') ?>" class="nav-link text-white">Quero Me
                                Cadastrar</a>
                        </li>
                        <li class="texto" class="nav-item">
                            <a href="<?= urlBase('login/') ?>" class="nav-link text-white">Entrar</a>
                        </li>
                    <?php } else { ?>
                        <li class="texto" class="nav-item">
                            <a href="<?= urlBase('cliente/') ?>" class="nav-link text-white">Minha Conta</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="<?= urlBase('carrinho.php') ?>" class="nav-link text-white">
                            <img class="carrinho" src="<?= urlBase('assets/img/carrinho.jpg') ?>" alt="Carrinho">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>