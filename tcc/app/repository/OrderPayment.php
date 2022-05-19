<?php

namespace app\repository;

use app\helper\BaseRepository;

class OrderPayment extends BaseRepository
{
    public function getTableName()
    {
        return "pedido_pagamento";
    }

    public function loadPayment($idOrder)
    {
        return $this->loadByField('fk_pedido', $idOrder);
    }
}