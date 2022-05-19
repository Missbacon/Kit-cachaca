<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Instruções Enviadas',
    ]);
?>
<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Instruções Enviadas!</h1>
            <hr>
            <p>
                Caro cliente,
            </p>
            <p>
                As instruções para a realização de cadastro de uma nova senha foram enviadas para o e-mail <b>email@dominio.com.br</b>.
                Abra a mensagem que lhe enviamos e siga as instruções corretamente para cadastrar uma nova senha.
            </p>
            <p>
                Agradecemos pela confiança em nossos serviços.
            </p>
            <p>
                <a href="<?= urlBase('') ?>" class="btn btn-lg btn-danger">Home</a>
            </p>
        </div>
    </main>

    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>