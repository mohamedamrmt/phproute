<?php

class auth
{
    public static function is_login(){
        return (!empty($_SESSION['user'])) ? 1 : false;
    }

    public static function redirectIfNotAuth(){
        if(self::is_login() == false){
            header("location: login.php");
        }
    }
}