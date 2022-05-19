<?php

namespace app\repository;

use app\helper\BaseRepository;

class ProductPrice extends BaseRepository
{
    public function getTableName()
    {
        return "produto_preco";
    }

    public function loadCurrentPrice($idProduct)
    {
        $table = $this->getTableName();

        $sql = "select *
                from $table
                where fk_produto = $idProduct 
                order by data_criacao asc
                limit 0,1";
        $data = $this->execQuery($sql);
        if (empty($data)) {
            return [];
        }
        return $data[0];
    }
}