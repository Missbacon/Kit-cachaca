<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Quem Somos',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Quem Somos</h1>
            <hr>
            <p>
                Kit Cachaça é uma loja virtual (e-commerce) fictícia criada como Projeto da aula de Desenvolvimento Web
                do professor Silvio.
            </p>
            <p>
                O objetivo deste e-commerce seria a venda de produtos alcoólicos destinados a pessoas maiores de 18
                anos.
            </p>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>