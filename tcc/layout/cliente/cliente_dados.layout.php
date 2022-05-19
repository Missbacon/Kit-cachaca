<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Área do Cliente :: Dados Pessoais',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Minha Conta</h1>
            <?= template('complement/tag/nav_customer') ?>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>