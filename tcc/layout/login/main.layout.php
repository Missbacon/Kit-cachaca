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
            <h2 class="title title-primary">Bem vindo!</h2>
            <p class="description description-primary">Caso ainda não seja cadastrado</p>
            <p class="description description-primary">faça seu cadastro no botão abaixo</p>
            <button id="btnVoltar" class="btn btn-primary"
                    onclick="window.location.href = '<?= urlBase('login/login_cadastro.php') ?>'">
                Cadastro
            </button>
        </div>
        <div class="second-column">
            <h2 class="title title-kit"><?= $dataInfo['NAME'] ?></h2>
            <h2 class="title title-second">Login</h2>
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
            <p class="description description-second">use seu email para logar:</p>
            <form class="form" action="<?= urlBase('login/login.php') ?>" method="POST">

                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify"></i>
                    <input name="usuario" name="text" type="email" placeholder="Email">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify"></i>
                    <input name="senha" type="password" placeholder="Senha">
                </label>
                <?php
                if (isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div align="center">
                        <p>Usuário ou senha inválidos.</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <a class="password" href="#">esqueceu a senha?</a>
                <button type="submit" class="btn btn-second">Logar</button>
            </form>
        </div><!-- second column -->
    </div><!-- first content -->
</div>

<?= template('complement/foot'); ?>
</body>

</html>