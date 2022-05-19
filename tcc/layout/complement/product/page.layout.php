<?php
$searc = 'w=' . $searchData['term'];
$order = 'o=' . $searchData['currentOrder'];
$totalPages = $searchData['totalPages'];
$currentPage = $searchData['currentPage'];
$qtyPages = 3;
$iInitial = 1;
?>

<nav class="d-inline-block me-3">
    <ul class="pagination pagination-sm my-0">
        <?php

        if ($currentPage > $qtyPages) {
            $iInitial = ($currentPage - $qtyPages);
        }
        if ($totalPages <= $currentPage && $currentPage >= $qtyPages) {
            $iInitial = ($currentPage - ($qtyPages * $qtyPages));
        }

        //voltar a  pagina inicial
        if ($currentPage > $qtyPages) {
            ?>
            <li class="page-item">
                <a class="page-link"
                   href="<?= urlBase('?' . $searc . '&p=1&' . $order) ?>">1</a>
            </li>
            ...
            <?php
        }

        //paginas disponiveis
        for ($i = $iInitial; $i < $totalPages; $i++) {
            $cls = ($i == $currentPage) ? ' disabled' : '';
            ?>
            <li class="page-item <?= $cls ?>">
                <a class="page-link"
                   href="<?= urlBase('?' . $searc . '&p=' . $i . '&' . $order) ?>"><?= $i ?></a>
            </li>
            <?php
        }

        //ir ate a ultima pagina
        if ($totalPages > ($qtyPages + $currentPage)) {
            ?>
            ...
            <li class="page-item">
                <a class="page-link"
                   href="<?= urlBase('?' . $searc . '&p=' . $totalPages . '&' . $order) ?>"><?= $totalPages ?></a>
            </li>
            <?php
        }

        ?>
    </ul>
</nav>