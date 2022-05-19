<?php

namespace app\service;

use app\repository\Customer;

class User
{
    public function getUser()
    {
        return $_SESSION['usuario'] ?? null;
    }


    public function loadCustomer($idUser)
    {
        $cliente = new Customer();
        return $cliente->loadCustomer($idUser);
    }


    public function login($user, $pass)
    {
        $cliente = new Customer();
        $dataUser = $cliente->login($user, $pass);

        if (count($dataUser) === 1) {
            $_SESSION['usuario'] = $dataUser[0];
            redirect('cliente/');
        } else {
            $_SESSION['nao_autenticado'] = true;
            redirect('');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        redirect('');
    }
}