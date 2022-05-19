<?php
$dataInfo = bootstrap()['STORE_INFO'];
$address = $dataCustomer['address'];
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
        <div class="container">
            <h1>Selecione o Endereço de Entrega</h1>
            <h3 class="mb-4">
                Selecione o endereço de entrega e clique em <b>Continuar</b> para prosseguir para a <b>seleção da
                    forma de pagamento</b>.
            </h3>

            <div class="d-flex justify-content-around flex-wrap border rounded-top pt-4 px-3">
                <?php
                if (!empty($address)) {
                    foreach ($address as $and) {
                        echo template('complement/cart/address', ['address' => $and, 'cart' => $cart, 'cartAddress' => $cartAddress]);
                    }
                } else {
                    echo "Você não tem nenhuma endereço cadastrado";
                }
                ?>
            </div>
        </div>
        <div class="text-end border border-top-0 rounded-bottom p-4 pb-0">
            <a href="<?= urlBase('fechamento_itens.php') ?>" class="btn btn-outline-success btn-lg mb-4">
                Voltar aos Itens
            </a>
            <?php if (!empty($cartAddress)) { ?>
                <a href="<?= urlBase('fechamento_pagamento.php') ?>"
                   class="btn btn-danger btn-lg ms-2 mb-4">Continuar</a>
            <?php } ?>
        </div>
</div>
</main>


<?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>