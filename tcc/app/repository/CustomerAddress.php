<?php

namespace app\repository;

use app\helper\BaseRepository;

class CustomerAddress extends BaseRepository
{
    public function getTableName()
    {
        return "cliente_endereco";
    }
}