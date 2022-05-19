<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Fechamento da Compra',
    ]);
?>
<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container text-center">
            <h1>Obrigado!</h1>
            <hr>
            <h3>Anote o número de seu pedido:</h3>
            <h2 class="text-danger"><b><?= $dataOrder['order']['data']['pedido_numero']?></b></h2>
            <p>Em até 2 horas, seu pedido será entregue. </p>  
            <p>Qualquer dúvida sobre este pedido, entre em contato conosco e
                informe o número do pedido para que possamos te ajudar.
            </p>
            <p>Tenha um ótimo dia!</p>
            <p>
                <a href="<?= urlBase('') ?>" class="btn btn-lg">Voltar à Página Principal</a>
            </p>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>