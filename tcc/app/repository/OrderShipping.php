<?php

namespace app\repository;

use app\helper\BaseRepository;
use app\repository\CustomerAddress;

class OrderShipping extends BaseRepository
{
    public function getTableName()
    {
        return "pedido_entrega";
    }

    public function loadShipping($idOrder)
    {
        $customerAddress = new CustomerAddress();

        $dataShipping = $this->loadByField('fk_pedido', $idOrder);
        $customerAddressData = $customerAddress->loadById($dataShipping[0]['fk_cliente_endereco']);

        return [
            'data' => $dataShipping,
            'customer_address' => $customerAddressData
        ];
    }
}