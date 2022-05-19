<?php
$type = $cartPayment['type'] ?? '';
$change = $cartPayment['change'] ?? '';

?>

<div class="mb-4 mx-2 flex-even">
    <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag2">
    <label class="btn p-4 h-100 w-100" for="pag2">
        <h3>
            <input type="radio" id="money" name="rd_type" value="DINHEIRO">
            <b class="text-dark"><label for="money">Dinheiro</label></b>
        </h3>
        <hr>
        <h4>Valor da Compra: <b>R$ <?= $totalCarrinho ?></b></h4>
        <br>
        <p>
            Se precisar de troco, informe no campo abaixo.
        </p>
        <div class="form-floating mb-3">
            <input type="text" id="txtTroco" name="payment[money][change]" value="<?= $change ?>" class="form-control"
                   placeholder=" ">
            <label for="txtTroco" class="text-black-50">Precisa de troco para quanto?</label>
        </div>

    </label>
</div>
