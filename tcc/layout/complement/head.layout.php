<?php
$path = urlBase('');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $path ?>assets/img/icon2.png">
    <link rel="manifest" href="<?= $path ?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $path ?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?= $path ?>assets/css/estilos.css">
    <link rel="stylesheet" href="<?= $path ?>assets/js/bootstrap/dist/css/bootstrap.min.css">

    <?php
    $path = urlBase('');
    if (!empty($assets)) {
        if (is_array($assets)) {
            foreach ($assets as $k) {
                echo includeAssetsString($k, $path);
            }
        } else {
            echo includeAssetsString($assets, $path);
        }
    }
    ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <title><?= $title ?></title>
</head>