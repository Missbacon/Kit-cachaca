<?php
$path = urlBase('');
?>

    <script src="<?= $path ?>assets/js/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $path ?>assets/js/app.js"></script>

<?php
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