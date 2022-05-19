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
            <h1>Carrinho de Compras</h1>
            <ul class="list-group mb-3">
                <?php
                if (!empty($cart)) {

                    foreach ($cart as $k) {
                        echo template('complement/cart/card', ['itemCart' => $k]);
                        $qty = $k['qty'];
                        $vl = $k['product']['price']['preco'];
                        $totalCarrinho += ($qty * $vl);
                    }
                } else {
                    echo "Seu carrinho esta vazio";
                }
                ?>

                <li class="list-group-item py-3">
                    <div class="text-end">

                        <?php
                        if (!empty($cart)) {
                            ?>
                            <h4 class="text-dark mb-3">
                                Valor Total: R$ <?= $totalCarrinho ?>
                            </h4>
                            <?php
                        }
                        ?>

                        <a href="<?= urlBase('') ?>" class="btn btn-outline-success btn-lg">
                            Continuar Comprando
                        </a>

                        <?php
                        if (!empty($cart)) {
                            ?>
                            <a href="<?= urlBase('fechamento_itens.php') ?>" class="btn btn-danger btn-lg ms-2 mt-xs-3">Fechar
                                Compra</a>
                            <?php
                        }
                        ?>
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