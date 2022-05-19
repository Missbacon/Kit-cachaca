<?php
$dataInfo = bootstrap()['STORE_INFO']
?>

<!DOCTYPE html>
<html lang="pt-br">

<?= template('complement/head',
    [
        'title' => $dataInfo['NAME'] . ' :: Área do Cliente :: Favoritos',
    ]);
?>

<body>
<div class="d-flex flex-column wrapper">

    <?= template('complement/tag/nav') ?>

    <main class="flex-fill">
        <div class="container">
            <h1>Minha Conta</h1>
            <div class="row gx-3 mb-3">

                <?= template('complement/tag/nav_customer') ?>


                <div class="col-8">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Quantidade em estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Quantidade em estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Quantidade em estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Quantidade em Estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Qtd estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Qtd Estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Qtd estoque</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger"
                                   title="Remover dos favoritos">
                                    <i class="bi-x" style="font-size: 24px; line-height: 24px;"></i>
                                </a>
                                <img src="" class="card-img-top">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text truncar-3l">
                                        Descrição
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                        Adicionar ao Carrinho
                                    </a>
                                    <small class="text-success">Qtd estoque</small>
                                </div>
                            </div>
                        </div>
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