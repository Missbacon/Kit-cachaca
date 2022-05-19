<?php

namespace app\repository;

use app\helper\BaseRepository;
use app\repository\Product;

class OrderItem extends BaseRepository
{
    public function getTableName()
    {
        return "pedido_item";
    }


    public function loadItems($idOrder)
    {
        $product = new Product();
        $items = $this->loadByField('fk_pedido', $idOrder);
        $arrItems = [];
        foreach ($items as $item) {
            $arrItems[] = [
                'data' => $item,
                'product' => $product->loadProduct($item['fk_produto'])
            ];
        }
        return $arrItems;
    }
}