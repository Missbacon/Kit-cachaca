<?php

namespace app\repository;

use app\helper\BaseRepository;

class ProductCategory extends BaseRepository
{
    public function getTableName()
    {
        return "produto_categoria";
    }
}