<?php

namespace App\Models;

class User
{
    public static function isLogged()
    {
        if(isset($_SESSION) AND isset($_SESSION['login']))
        {
            return true;
        } else {
            return false;
        }
    }

}