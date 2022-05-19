<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Contato',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <form class="col-sm-10 col-md-8 col-lg-6">
                    <h1>Entre em Contato</h1>
                    <div class="form-floating mb-3">
                        <input type="text" id="txtNomeCompleto" class="form-control" placeholder=" " autofocus>
                        <label for="txtNomeCompleto">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" id="txtEmail" class="form-control" placeholder=" ">
                        <label for="txtEmail">E-mail</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea id="txtMensagem" class="form-control" placeholder=" "
                                  style="height: 200px;"></textarea>
                        <label for="txtMensagem">Mensagem</label>
                    </div>

                    <button type="button" onclick="window.location.href='<?= urlBase('empresa/confirmcontato.php') ?>"
                        id="btn-msg" class="btn btn-lg btn">
                        Enviar Mensagem
                    </button>
                  <br>
                  <br>
                  <br>
                </form>
            </div>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>