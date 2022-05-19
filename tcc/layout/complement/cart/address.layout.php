<div class="mb-4 mx-2 flex-even">
    <input type="radio" class="btn-check" name="endereco" autocomplete="off" id="<?= $address['id'] ?? '' ?>">

    <label class="btn btn-outline-danger p-4 h-100 w-100" for="<?= $address['id'] ?? '' ?>">

        <?php
        if ($address['id'] == ($cartAddress ?? 0)) {
            echo "Selecionado";
        } else {
            echo '<a href="' . urlBase('fechamento_endereco.php?address=' . $address['id']) . '">Escolher</a>';
        }
        ?>
        <br>
        <h3><b class="text-dark"><?= $address['nome'] ?? '' ?></b></h3>
        <hr>
        <h3>
            <?= $address['logradouro'] ?>, <?= $address['numero'] ?><br>
            <?= $address['bairro'] ?> - <?= $address['cidade'] ?> / <?= $address['uf'] ?> <br>
            CEP <?= $address['cep'] ?>
        </h3>


    </label>
</div>