<?php

namespace App\Controllers;
use App\Models\News;
use \Core\View;
use App\Models\Auth;

class Login extends \Core\Controller
{

    public function __construct($params)
    {
        parent::__construct($params);
        $this->data['title'] = "Login";
        $this->data['news'] = News::getNews();

    }

    public function index()
    {
        if(isset($_POST["login"]))
        {
            $username = isset($_POST["username"]) ? $_POST["username"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;
            if($username == null || !ctype_alnum($username))
            {
                $result['login'] = "Uživatelské jméno se musí skládat pouze z alfanumerických znaků!";
            } elseif($password == null) {
                $result['login'] = "Musíte zadat heslo!";
            } else {
                if(Auth::login($username, $password))
                {
                    $result['login'] = "Přihlášení proběhlo úspěšně. Budete přesměrován/a.";
                    $this->redirect('home');
                } else {
                    $result['login'] = "Zadané údaje jsou nesprávné.";
                }
            }
            $this->data['result'] = $result;
        }
        View::render("home/index", $this->data);
    }

    public function logout()
    {
        \Session::destroy();
        $this->redirect('home');
    }

}