<?php
$type = $cartPayment['type'] ?? '';
$ccName = $cartPayment['cc']['name'] ?? '';
$ccNumber = $cartPayment['cc']['number'] ?? '';
$ccValid = $cartPayment['cc']['valid'] ?? '';
$ccInstallment = $cartPayment['cc']['installment'] ?? '';

$ccInstallmentOption = function ($v1, $v2) {
    return ($v1 == $v2) ? 'selected' : '';
};
?>

<div class="mb-4 mx-2 flex-even">
    <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag1">
    <label class="btn btn-outline p-4 h-100 w-100" for="pag1">
        <h3>
            <input type="radio" id="cc" name="rd_type" value="CARTAO_CREDITO">
            <b class="text-dark"><label  for="cc">Cartão de Crédito</label></b>
        </h3>
        <hr>
        <div class="form-floating mb-3">
            <input type="text" id="txtNome" name="payment[cc][name]" value="<?= $ccName ?>" class="form-control"
                   placeholder=" " autofocus>
            <label for="txtNome" class="text-black-50">Nome Impresso no Cartão</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" id="txtNumero" name="payment[cc][number]" value="<?= $ccNumber ?>"
                   class="form-control" placeholder=" ">
            <label for="txtNumero" class="text-black-50">Número do Cartão</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" id="txtValidade" name="payment[cc][valid]" value="<?= $ccValid ?>"
                   class="form-control" placeholder=" ">
            <label for="txtValidade" class="text-black-50">Validade (mm/aa)</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" id="txtCodigo" name="payment[cc][ccv]" value="" class="form-control"
                   placeholder=" ">
            <label for="txtCodigo" class="text-black-50">Código de Segurança</label>
        </div>

        <div class="form-floating">
            <select id="selParcelas" class="form-select" name="payment[cc][installment]">
                <option value="1" <?= $ccInstallmentOption(1, $ccInstallment) ?>>À vista</option>
                <option value="2" <?= $ccInstallmentOption(2, $ccInstallment) ?>>2 x sem juros</option>
                <option value="3" <?= $ccInstallmentOption(3, $ccInstallment) ?>>3 x sem juros</option>
                <option value="4" <?= $ccInstallmentOption(4, $ccInstallment) ?>>4 x sem juros</option>
                <option value="5" <?= $ccInstallmentOption(5, $ccInstallment) ?>>5 x sem juros</option>
                <option value="6" <?= $ccInstallmentOption(6, $ccInstallment) ?>>6 x sem juros</option>
            </select>
            <label for="selParcelas" class="text-black-50">Parcelamento</label>
        </div>

    </label>
</div>