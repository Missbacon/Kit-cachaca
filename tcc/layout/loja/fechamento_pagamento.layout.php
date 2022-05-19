<?php
$dataInfo = bootstrap()['STORE_INFO'];
$totalCarrinho = 0;
if (!empty($cart)) {
    foreach ($cart as $k) {
        $qty = $k['qty'];
        $vl = $k['product']['price']['preco'];
        $totalCarrinho += ($qty * $vl);
    }
}
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
            <h1>Selecione a Forma de Pagamento</h1>
            <h3 class="mb-4">
                Selecione a forma de pagamento e clique em <b>Continuar</b> para prosseguir para <b>concluir o
                    pedido</b>.
            </h3>

            <form method="post" id="form_close_order" action="<?= urlBase('fechamento_pedido.php'); ?>">
                <div class="d-flex justify-content-between flex-wrap border rounded-top pt-4 px-3">
                    <?= template('complement/payment/cc', [
                        'totalCarrinho' => $totalCarrinho,
                        'cart' => $cart,
                        'cartPayment' => $cartPayment
                    ]); ?>

                    <?= template('complement/payment/money', [
                        'totalCarrinho' => $totalCarrinho,
                        'cart' => $cart,
                        'cartPayment' => $cartPayment
                    ]); ?>
                </div>
            </form>

            <div class="text-end border border-top-0 rounded-bottom p-4 pb-0">
                <a href="<?= urlBase('fechamento_endereco.php') ?>" class="btn btn-outline-success btn-lg mb-4">
                    Voltar aos Endereços
                </a>
                <a href="#" onclick='document.getElementById("form_close_order").submit();'
                   class="btn btn-danger btn-lg ms-2 mb-4">Finalizar</a>
            </div>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>