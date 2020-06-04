<?php

class Auth
{
    public function afterLogin()
    {
        @session_start();
        if(isset($_SESSION['usser']))
        {
            header("Location: /ExpoDAO/usser/games-list");
            exit;
        }
    }

    public function needLogin()
    {
    	@session_start();
        if(!isset($_SESSION['usser'])) 
        {
            header("Location: /ExpoDAO/login");
            exit;
        }
    }
}