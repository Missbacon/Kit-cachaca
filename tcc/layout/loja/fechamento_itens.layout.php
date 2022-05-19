<?php
$dataInfo = bootstrap()['STORE_INFO'];
$totalCarrinho = 0;
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
            <h1>Confira os Itens</h1>
            <h3>Confira os itens e clique em <b>Continuar</b> para prosseguir para a <b>seleção do endereço de
                    entrega</b>.</h3>
            <ul class="list-group mb-3">


                <?php
                if (!empty($cart)) {

                    foreach ($cart as $k) {
                        echo template('complement/cart/card_simple', ['itemCart' => $k]);
                        $qty = $k['qty'];
                        $vl = $k['product']['price']['preco'];
                        $totalCarrinho += ($qty * $vl);
                    }
                } else {
                    echo "Seu carrinho esta vazio";
                }
                ?>


                <li class="list-group-item pt-3 pb-0">
                    <div class="text-end">
                        <h4 class="text-dark mb-3">
                            Valor Total: R$ <?= $totalCarrinho ?>
                        </h4>
                        <a href="<?= urlBase('carrinho.php') ?>" class="btn btn-outline-success btn-lg mb-3">
                            Voltar ao Carrinho
                        </a>
                        <a href="<?= urlBase('fechamento_endereco.php') ?>" class="btn btn-danger btn-lg ms-2 mb-3">Continuar</a>
                    </div>
                </li>
            </ul>
        </div>
    </main>


    <?= template('complement/tag/footer') ?>
</div>

<?= template('complement/foot'); ?>
</body>

</html>