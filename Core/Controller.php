<?php

namespace Core;

use App\Models\User;
use App\Models\Ranking;

abstract class Controller
{
    protected $data;

    public function __construct($params)
    {
        unset($params['controller']);
        unset($params['action']);
        unset($params[0]);
        $this->data = $params;
        $this->data['logged'] = User::isLogged();
        $this->data['title'] = '';
        $this->data['playersRanking'] = Ranking::playersPanel();
        $this->data['guildsRanking'] = Ranking::guildsPanel();
    }

    public function redirect($url)
    {
        header("Location: /$url");
        header("Connection: close");
        exit;
    }
}