<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Nova Senha Cadastrada',
    ]);
?>
<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Nova Senha Cadastrada!</h1>
            <hr>
            <p>
                Caro cliente,
            </p>
            <p>
                Sua nova senha foi cadastrada com sucesso. Para entrar em sua área restrita agora mesmo, <a
                        href="<?= urlBase('login/') ?>">clique aqui</a>.
            </p>
            <p>
                Agradecemos pela confiança em nossos serviços.
            </p>
            <p>
                <a href="<?= urlBase('') ?>" class="btn btn-lg btn-danger">Voltar à Página Principal</a>
            </p>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>