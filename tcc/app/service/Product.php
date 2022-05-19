<?php

namespace app\service;

use app\repository\Product as RepProduct;


class Product
{

    public function loadProduct($idProduct)
    {
        $product = new RepProduct();
        return $product->loadProduct($idProduct);
    }

    /**
     * Buscar produtos
     *
     * @param string $text
     * @param int $page
     * @param string $orderCol
     * @param string $orderOrder
     * @return mixed
     */
    public function search($text = '', $page = 0, $order = '')
    {
        $search = bootstrap()['SEARCH'];
        $limit = $search['PAGE_LIMIT'];
        $product = new RepProduct();
        return $product->searchProduct($text, $order, $page, $limit);
    }
}