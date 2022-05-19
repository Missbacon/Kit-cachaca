<?php
/*
 *  Atributos necessarios:
 * -----------------------
*/
$productData = $itemCart['product'];
$qty = $itemCart['qty'];
$id = $productData['data']['id'];
$add = ($qty + 1);
$sub = (($qty - 1) < 1) ? 1 : ($qty - 1);
?>

<div class="input-group">
    <a href="<?= urlBase('carrinho.php?qty=' . $id . '-' . $sub) ?>" class="btn btn-outline-dark btn-sm"
       type="button">
        -
    </a>
    <input type="text" class="form-control text-center border-dark" value="<?= $qty ?>">
    <a href="<?= urlBase('carrinho.php?qty=' . $id . '-' . $add) ?>" class="btn btn-outline-dark btn-sm"
       type="button">
        +
    </a>

    <a href="<?= urlBase('carrinho.php?remove=' . $id) ?>">Remover do carrinho</a>
</div>