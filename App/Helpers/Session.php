<?php

class Session
{
    private $inited;

    public function init()
    {
        if($this->inited !== true)
        {
            session_start();
            $this->inited = true;
        }
    }

    public function __construct()
    {
        $this->init();
    }

    public static function destroy()
    {
        session_unset();
        session_destroy();
        unset($_SESSION);
    }
}