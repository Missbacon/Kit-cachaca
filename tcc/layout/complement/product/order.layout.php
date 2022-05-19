<?php
$search = $searchData['term'];
$order = $searchData['currentOrder'];
$currentPage = $searchData['currentPage'];

$optionSelect = function ($optionValue, $name, $order) {
    $sel = ($order == $optionValue) ? "selected" : '';
    echo '<option value="' . $optionValue . '" ' . $sel . '>' . $name . '</option>';
}

?>
<form class="d-inline-block">
    <input type="hidden" value="<?= $search ?>" name="w">
    <input type="hidden" value="<?= $currentPage ?>" name="p">
    <select class="form-select form-select-sm" name="o" onchange="this.form.submit()">
        <?= $optionSelect('nome-ASC', 'Ordenar pelo nome', $order); ?>
        <?= $optionSelect('preco-ASC', 'Ordenar pelo menor preço', $order); ?>
        <?= $optionSelect('preco-DESC', 'Ordenar pelo maior preço', $order); ?>
    </select>
</form>