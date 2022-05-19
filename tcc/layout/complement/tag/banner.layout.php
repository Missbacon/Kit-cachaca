<?php
$banner = bootstrap()['STORE_INFO']['BANNER'];
?>

<div class="container">
    <div id="carouselMain" class="carousel slide carousel" data-bs-ride="carousel">


        <div class="carousel-indicators">
            <?php
            for ($i = 0; $i < (count($banner) - 1); $i++) {
                $cls = ($i == 0) ? 'class="active"' : '';
                echo '<button type="button" data-bs-target="#carouselMain" data-bs-slide-to="' . $i . '" ' . $cls . '></button>';
            }
            ?>
        </div>

        <div class="carousel-inner">

            <?php
            $i = 0;
            foreach ($banner as $k) {
                $cls = ($i == 0) ? 'active' : '';
                echo '<div class="carousel-item ' . $cls . '" data-bs-interval="3000">
                    <img class="banner" src="' . urlBase($k) . '"
                         class="d-none d-md-block w-100"
                         alt="">
                </div>';
                $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    <hr class="mt-3">
</div>
