<?php

namespace App\Controllers;
use App\Models\News;
use \Core\View;
use App\Models\Auth;

class Error extends \Core\Controller
{

    public function __construct($params)
    {
        parent::__construct($params);
        $this->data['title'] = "Error";
    }

    public function notFound()
    {
        View::render("error/404", $this->data);
    }

}