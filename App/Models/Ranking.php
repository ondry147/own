<?php

namespace App\Models;
use Db;

class Ranking
{

    public static function playersPanel($limit = 10)
    {
        $query = Db::queryAll("SELECT id, name, level FROM " . Db::playerDb() . ".player ORDER BY level DESC LIMIT ?",
            array($limit));

        return $query;
    }

    public static function guildsPanel($limit = 5)
    {
        $query = Db::queryAll("SELECT id, name, level FROM " . Db::playerDb() . ".guild ORDER BY level DESC LIMIT ?",
            array($limit));

        return $query;
    }
}