<?php

namespace App\Models;
use Db;

class Register
{

    public static function register($username, $email, $password, $delcode)
    {
        Db::query("INSERT INTO " . Db::accountDb() . ".account (login, email, password, social_id) VALUES (?,?,password(?), ?)",
            array($username, $email, $password, $delcode));
    }

    public static function usernameExists($username)
    {
        $query = Db::query("SELECT * FROM ".Db::accountDb().".account WHERE login = ?", array($username));
        if($query > 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public static function emailExists($username)
    {
        $query = Db::query("SELECT * FROM ".Db::accountDb().".account WHERE email = ?", array($username));
        if($query > 0)
        {
            return true;
        } else {
            return false;
        }
    }

}