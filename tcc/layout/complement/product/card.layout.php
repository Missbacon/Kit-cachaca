<?php
/*
 *  Atributos necessarios:
 * -----------------------
*/
$id = $productData['data']['id'];
$sku = $productData['data']['sku'];
$img = $productData['data']['foto'];
$name = $productData['data']['nome'];
$describe = $productData['data']['descricao_prod'];
$url = $productData['data']['url'];
$stock = 0;
$value = '--';

if (!empty($productData['price'])) {
    $value = "R$ " . $productData['price']['preco'];
}
if (!empty($productData['stock'])) {
    $stock = $productData['stock']['quantidade'];
}


?> 
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
<br> 
    <div class="card text-center bg-light">
        <a href="#" class="position-absolute end-0 p-2 text-danger">
            <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
        </a>
        <a href="<?= urlBase('produto.php?p=' . $id) ?>">
            <img class="gin-1" src="<?= urlBase('assets/img/' . $img) ?>" class="card-img-top">
        </a>
        <div class="card-body">
            <h5 class="card-title"><?= $name ?></h5>
            <p class="card-text truncar-3l">
                <?= $describe ?>
            </p>
        </div>
        <div class="card-header">
            <?= $value ?>
        </div>

        <div class="card-footer">
            
            <?php if ($stock) { ?>
                <a href="<?= urlBase('carrinho.php?add=' . $id) ?>" id="btn-cart" class="btn mt-2 d-block">
                    Adicionar ao Carrinho
                </a>

            <?php } else { ?>
                   
                <a href="#" id="txt-prod" class="btn disabled mt-2 d-block">
                    <b>Produto Esgotado</b>
                </a>
                <small class="text-danger">
                </small>

            <?php } ?>
                    
        </div> 
    </div>
    <br> 
    <br> 
</div>
