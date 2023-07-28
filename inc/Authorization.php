<?php
class Authorization
{
    public $hostname = 'localhost';
    public $username = 'lov3hjelm';
    public $pass = 123;
    public $dbname = 'users';

    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    // все строки объединил в один метод. 
    // не понял, как во втором методе обращаться к переменной из первого метода

    public function mysql()
    {
        $mysql = mysqli_connect($this->hostname, $this->username, $this->pass, $this->dbname);
        mysqli_set_charset($mysql, 'utf8');
        $result = mysqli_query($mysql, "SELECT * FROM `users` WHERE `login` = '$this->login' AND `password` = '$this->password'");
        $user = mysqli_fetch_assoc($result);

        if (is_countable($user) == 0) {
            echo 'Такой пользователь не найден';
            exit();
        }

        setcookie('user', $user['name'], time() + 3600, "/");

        header('Location: /');
    }
}
