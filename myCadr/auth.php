<?php
session_start();
require_once "authregistr/database.php";
class Auth
{
    public $login;
    public $password;
    // public function _construct($login, $password)
    // {
    //     $this . login->$login;
    //     $this . password->password;
    // }
    public function get_login()
    {
        $login = isset($_POST['login']) ? $_POST['login'] : 0;
        //$selectData="SELECT * FROM Registr WHERE login='$login'";
        return $login;
    }
    public function get_password(){
        $password = isset($_POST['password']) ? $_POST['password'] : 0;
        // $selectData="SELECT * FROM Registr WHERE password='$password'";
        return $password;
    }
}