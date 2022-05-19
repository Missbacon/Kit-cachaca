<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Área do Cliente :: Contatos',
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
                    <form action="">
                        <div class="form-floating mb-3 col-md-8">
                            <input class="form-control" type="email" id="txtEmail" placeholder=" " autofocus/>
                            <label for="txtEmail">E-mail</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="text" id="txtTelefone" placeholder=" "/>
                            <label for="txtTelefone">Telefone</label>
                        </div>
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