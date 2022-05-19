<?php
$info = bootstrap()['STORE_INFO'];
?>

<footer class="border-top text-muted bg-light">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-md-4 text-center">
                &copy; <?= date('Y') ?> - <?= $info['NAME'] ?><br>
                <?= $info['ADDRESS'] ?><br>
                CPNJ <?= $info['CNPJ'] ?>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="<?= urlBase('empresa/privacidade.php') ?>" class="text-decoration-none text-dark">
                    Política de Privacidade
                </a><br>
                <a href="<?= urlBase('empresa/termos.php') ?>" class="text-decoration-none text-dark">
                    Termos de Uso
                </a><br>
                <a href="<?= urlBase('empresa/') ?>" class="text-decoration-none text-dark">
                    Quem Somos
                </a><br>
                <a href="<?= urlBase('empresa/trocas.php') ?>" class="text-decoration-none text-dark">
                    Trocas e Devoluções
                </a>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="<?= urlBase('empresa/contato.php') ?>" class="text-decoration-none text-dark">
                    Contato pelo Site
                </a><br>
                E-mail: <a href="mailto:<?= $info['EMAIL'] ?>" class="text-decoration-none text-dark">
                    <?= $info['EMAIL'] ?>
                </a><br>
                Telefone: <a href="phone:<?= $info['PHONE'] ?>" class="text-decoration-none text-dark">
                    <?= $info['PHONE'] ?>
                </a>
            </div>
        </div>
    </div>
</footer>