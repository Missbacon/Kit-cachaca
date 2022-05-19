<?php
$dataInfo = bootstrap()['STORE_INFO']
?>
<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head_admin', ['title' => 'Login']); ?>

<body>
<div class="container">
    <div class="content first-content">
        <div class="first-column">
        </div>
        <div class="second-column">
            <h2 class="title title-kit"><?= $dataInfo['NAME'] ?></h2>
            <h2 class="title title-second">Cadastre-se</h2>
            <div class="social-media">
                <ul class="list-social-media">
                    <a class="link-social-media" href="#">
                        <li class="item-social-media">
                            <i class="fab fa-facebook-f"></i>
                        </li>
                    </a>
                    <a class="link-social-media" href="#">
                        <li class="item-social-media">
                            <i class="fab fa-google-plus-g"></i>
                        </li>
                    </a>
                    <a class="link-social-media" href="#">
                        <li class="item-social-media">
                            <i class="fab fa-linkedin-in"></i>
                        </li>
                    </a>
                </ul>
            </div><!-- social media -->
            <p class="description description-second">use seu e-email para se registrar:</p>
            <form class="form">
                <label class="label-input" for="">
                    <i class="far fa-user icon-modify"></i>
                    <input type="text" placeholder="Name">
                </label>

                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify"></i>
                    <input type="email" placeholder="Email">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify"></i>
                    <input type="password" placeholder="Password">
                </label>
                <button id="btn-cad" class="btn btn-second">
                    <a id="text" href="<?= urlBase('') ?>">
                    Cadastre-se</button>
                    </a>
            </form>
        </div>

        <?= template('complement/foot'); ?>
</body>

</html>