<?php

namespace App\Controllers;
use App\Models\News;
use \Core\View;
use App\Models\Auth;

class Home extends \Core\Controller
{

    public function __construct($params)
    {
        parent::__construct($params);
        $this->data['title'] = "Home";
        $this->data['news'] = News::getNews();

    }

    public function index()
    {
        View::render("home/index", $this->data);
    }


    public function contact()
    {
        if(!isset($this->data['id']))
        {
            $this->data['id'] = "";
        }
        echo "Hello from Home/Contact. ID is: " . $this->data['id'];
    }
}