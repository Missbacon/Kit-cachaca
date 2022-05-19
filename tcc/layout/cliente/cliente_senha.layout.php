<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Área do Cliente :: Alteração de Senha',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>


            <main class="flex-fill">
                <div class="container">
                    <h1>Minha Conta</h1>
                    <div class="row gx-3">

                        <?= template('complement/tag/nav_customer') ?>


                        <div class="col-8">
                            <form class="col-sm-12 col-md-8 col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" id="txtSenhaAtual" class="form-control" placeholder=" " autofocus>
                                    <label for="txtSenhaAtual">Digite aqui sua senha atual</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" id="txtSenha" class="form-control" placeholder=" ">
                                    <label for="txtSenha">Digite aqui sua nova senha</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" id="txtConfSenha" class="form-control" placeholder=" ">
                                    <label for="txtConfSenha">Redigite aqui a nova senha</label>
                                </div>

                                <button type="button" onclick="window.location.href='/confirmcadastrosenha.html'" class="btn btn-lg btn-danger">Alterar Senha</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>




    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>