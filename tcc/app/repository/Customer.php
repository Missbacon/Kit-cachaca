<?php

namespace app\repository;

use app\helper\BaseRepository;
use app\repository\CustomerAddress;

class Customer extends BaseRepository
{

    public function getTableName()
    {
        return "cliente";
    }

    public function loadCustomer($idCustomer)
    {
        $customer = $this->loadById($idCustomer);
        $customerAddress = new CustomerAddress();
        return [
            'customer' => $customer,
            'address' => $customerAddress->loadByField('fk_cliente', $idCustomer),
        ];
    }

    public function login($user, $pass)
    {
        $table = $this->getTableName();
        $user = $this->cleanString($user);
        $pass = $this->cleanString(sha1($pass));
        $sql = "select *
                from $table 
                where email = '$user' 
                and senha = '$pass'";
        return $this->execQuery($sql);
    }
}