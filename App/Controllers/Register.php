<?php

namespace App\Controllers;
use App\Models\User;
use \Core\View;
use \Core\Model;
use App\Models\Register as RegisterModel;

class Register extends \Core\Controller
{
    public function __construct($params)
    {
        parent::__construct($params);
        $this->data['title'] = 'Registrace';
    }

    public function index()
    {
        $result = [];
        if(User::isLogged())
        {
            $this->redirect('home');
        }

        if(isset($_POST["register"]))
        {
            $username = isset($_POST["username"]) ? $_POST["username"] : null;
            $email = isset($_POST["email"]) ? $_POST["email"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;
            $password2 = isset($_POST["password2"]) ? $_POST["password2"] : null;
            $delcode = isset($_POST["deletecode"]) ? $_POST["deletecode"] : null;
            if(!ctype_alnum($username))
            {
                $result['register'] = "Uživatelské jméno se musí skládat pouze z alfanumerických znaků.";
            } elseif(RegisterModel::usernameExists($username)) {
                $result['register'] = "Uživatelské jméno již existuje.";
            } elseif(RegisterModel::emailExists($email)) {
                $result['register'] = "Email je již přiřazen k účtu.";
            } elseif($password != $password2) {
                $result['register'] = "Hesla se neshodují.";
            } else {
                RegisterModel::register($username, $email, $password, $delcode);
                $result['register'] = "Úspěšně zaregistrován!";
            }
        }
        $this->data["result"] = $result;
        View::render("register/index", $this->data);
    }

    public function show()
    {
        $db = Model::getDB();
        $this->data['names'] = $db->query("SELECT login FROM account");
        $this->data['title'] = "Team";
        View::render("team/show", $this->data);
    }
}