<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head', ['title' => 'Login']); ?>

<body>
<div class="container">
    <div class="">
        <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
        <h2><a href="<?= urlBase('login/logout.php') ?>">Sair</a></h2>
    </div>
</div>

<?= template('complement/foot'); ?>
</body>

</html>