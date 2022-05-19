<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Mensagem Recebida',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Mensagem Recebida!</h1>
            <hr>
            <p>
                Caro cliente,
            </p>
            <p>
                Informamos que sua mensagem foi recebida com sucesso por nossa central de relacionamento com clientes e
                que em até <b>2 dias úteis</b> ela será respondida. Para evitarmos problemas de comunicação, evite
                reenviar esta mesma mensagem dentro do prazo de resposta.
            </p>
            <p>
                Agradecemos pela confiança em nossos serviços.
            </p>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>