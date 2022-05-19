<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Página Principal',
    ]);
?>

<body>

<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <?= template('complement/tag/banner') ?>

    <main class="flex-fill">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <?= template('complement/product/search', ['searchData' => $arrProduct]) ?>
                </div>
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

                        <?= template('complement/product/order', ['searchData' => $arrProduct]) ?>

                        <?= template('complement/product/page', ['searchData' => $arrProduct]) ?>

                    </div>
                </div>
            </div>

            <hr mt-3>

            <?php
            $categories = array_keys($arrProduct['data']);
            foreach ($categories as $category) {
                $arrProductCat = $arrProduct['data'][$category];
                $cat = $arrProductCat[0]['category']
                ?>
                <h1><?= $cat['nome'] ?></h1>
                <div class="row g-3">
                    <?php
                    foreach ($arrProductCat as $prod) {
                        echo template('complement/product/card', ['productData' => $prod]);
                    }
                    ?>
                </div>
                <?php
            }
            ?>

            <hr class="mt-3">
            <div class="row pb-3">
                <div class="col-12">
                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

                        <?= template('complement/product/order', ['searchData' => $arrProduct]) ?>

                        <?= template('complement/product/page', ['searchData' => $arrProduct]) ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= template('complement/tag/footer') ?>
</div>


<?= template('complement/foot'); ?>
</body>

</html>