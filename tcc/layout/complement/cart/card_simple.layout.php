<?php
/*
 *  Atributos necessarios:
 * -----------------------
*/
$productData = $itemCart['product'];
$qty = $itemCart['qty'];
$id = $productData['data']['id'];
$sku = $productData['data']['sku'];
$img = $productData['data']['foto'];
$name = $productData['data']['nome'];
$describe = $productData['data']['descricao_prod'];
$url = $productData['data']['url'];
$stock = 0;
$value = '--';
$valueTotal = '--';

if (!empty($productData['price'])) {
    $vl = $productData['price']['preco'];
    $value = "R$ " . $vl;
    $valueTotal = "R$ " . ($vl * $qty);
}
if (!empty($productData['stock'])) {
    $stock = $productData['stock']['quantidade'];
}

?>

<li class="list-group-item py-3">
    <div class="row g-3">
        <div class="col-4 col-md-3 col-lg-2">
            <img src="<?= urlBase('assets/img/' . $img) ?>" class="img-thumbnail">
        </div>
        <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
                <b>
                    <div class="text-decoration-none text-danger"><?= $name ?></div>
                </b>
            </h4>
        </div>
        <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
            <div class="text-end mt-2">
                <div><b>
                        <?php
                        $un = ($qty > 1) ? 's' : '';
                        echo $qty . ' unidade' . $un
                        ?>
                    </b></div>
                <small class="text-secondary">Valor item: <?= $value ?></small><br>
                <span class="text-dark">Total item: <?= $valueTotal ?></span>
            </div>
        </div>

    </div>
</li>