<?php

namespace Core;


class View
{
    public static function render($file, $data = [], $top = true, $side = true, $bot = true)
    {
        extract($data, EXTR_SKIP);
        if($top)
           require "../App/Views/base/top.php";
        $path = "../App/Views/" . $file . ".php";
        if(is_readable($path))
        {
            require $path;
        } else {
            echo "View $path not found";
        }
        if($side)
            require "../App/Views/base/side.php";
        if($bot)
            require "../App/Views/base/bot.php";

    }
}