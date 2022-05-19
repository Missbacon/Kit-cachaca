<?php

namespace app\repository;

use app\helper\BaseRepository;

class Admin extends BaseRepository
{
    public function getTableName()
    {
        return "admin";
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