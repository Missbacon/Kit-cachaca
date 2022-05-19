<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Recuperação de Senha',
    ]);
?>
<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-sm-10 col-md-8 col-lg-6">
                    <h1>Recuperação de Senha</h1>

                    <div class="form-floating mb-3">
                        <input type="email" id="txtEmail" class="form-control" placeholder=" " autofocus>
                        <label for="txtEmail">E-mail</label>
                    </div>

                    <button type="button" onclick="window.location.href='<?= urlBase('login/confirmrecupsenha.php') ?>'"
                            class="btn btn-lg btn-danger">Recuperar Senha
                    </button>

                    <p class="mt-3">
                        Ainda não é cadastrado? <a href="<?= urlBase('login/login_cadastro.php') ?>">Clique aqui</a>
                        para se cadastrar.
                    </p>
                </form>
            </div>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>