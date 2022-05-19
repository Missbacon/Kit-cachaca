<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Cadastro de Nova Senha',
    ]);
?>
<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-sm-10 col-md-8 col-lg-6">
                    <h1>Digite sua nova senha</h1>

                    <div class="form-floating mb-3">
                        <input type="password" id="txtSenha" class="form-control" placeholder=" " autofocus>
                        <label for="txtSenha">Nova Senha</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" id="txtConfSenha" class="form-control" placeholder=" ">
                        <label for="txtConfSenha">Confirme a Nova Senha</label>
                    </div>

                    <button type="button"
                            onclick="window.location.href='<?= urlBase('login/confirmcadastrosenha.php') ?>"
                            class="btn btn - lg btn - danger">Cadastrar
                    </button>

                </form>
            </div>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>