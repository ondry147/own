<?php

namespace App\Models;
use Db;

class Auth
{
    public static function login($username, $password)
    {
        $query = Db::queryAlone("SELECT * FROM ". \Core\Config::DB_ACCOUNT . ".account WHERE login = ? AND password = password(?)",
            array($username, $password));

        if($query > 0)
        {
            $_SESSION['login']  = $query['login'];
            return true;
        } else {
            return false;
        }
    }

    public static function hashPassword($password)
    {

    }

}