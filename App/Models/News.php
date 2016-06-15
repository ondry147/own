<?php

namespace App\Models;
use Db;

class News
{
    public static function count()
    {
        $count = Db::query("SELECT * FROM news");
        return $count;
    }

    public static function getNews()
    {
        if(self::count() > 0)
        {
            $news = Db::queryAll("SELECT * FROM news");
            return $news;
        } else {
            return false;
        }
    }
}