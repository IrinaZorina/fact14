<?php


class authorization_class
{
    protected $login;
    protected $password;

    protected $hostname;
    protected $username;
    protected $passwordDB;
    protected $bdName;
    protected $connect;

    protected $loginControl=1;
    protected $passwordControl=1;

    public function connectDB($hostname,$username,$password,$bdName){
        $this->hostname=$hostname;
        $this->username=$username;
        $this->passwordDB=$password;
        $this->bdName=$bdName;
        $this->connect=mysqli_connect($hostname,$username,$password,$bdName);
    }//подключение к БД

    public function regControl(){
    	if(array_key_exists('login',$_POST) && array_key_exists('password',$_POST)){
    		$this->login=$_POST['login'];//записываем логин
			$this->password=$_POST['password'];//записываем пароль
	    }
        if(!empty($this->login) && !empty($this->password)){
            if($this->password!=$_POST['repeat']){
                echo "<p>не верно повторили пароль</p>";
            }
            else{
                $_SESSION['login']=$this->login;
                $_SESSION['password']=sha1($this->password);
                mysqli_query($this->connect,"insert into clients (login,pas) values ('".$_SESSION['login']."','".$_SESSION['password']."')");
                header('location: hello.php');
            }
        }
    }//проверка регистрации и вход нового пользователя

    public function exitControl(){
        if(array_key_exists('exit',$_POST) && $_POST['exit']==1){
            unset($_SESSION['login']);
            unset($_SESSION['password']);
            unset($_POST['exit']);
        }
    }//проверка условий для выхода (очистка сессии)

	public function writeLogPas(){
    	$arrPerson=mysqli_fetch_all(mysqli_query($this->connect, "select * from clients"), MYSQLI_ASSOC);

        if(!empty($_SESSION) && array_key_exists('login', $_SESSION) && array_key_exists('password', $_SESSION)){
            foreach($arrPerson as $key=>$value){
                foreach($value as $newkey=>$newvalue){
                    if($newvalue==$_SESSION['login']){
                        $this->loginControl=$newvalue;
                    }
                    if($newvalue==$_SESSION['password']){
                        $this->passwordControl=$newvalue;
                    }
                }
            }

        }
	}//запись логина и пароля в переменные

	public function buttonExit(){
    	if(array_key_exists('login', $_SESSION) && $_SESSION['login']==$this->loginControl && $_SESSION['password']==$this->passwordControl && array_key_exists('password', $_SESSION)){
                        echo "<li class='menu'><form action='index.php' method='post' style='display: inline'>
                            <button name='exit' value='1' class='menu_text' style='background-color: rgba(1,1,1,0)'>Выход</button>
                        </form></li>";
                    }
	}//кнопка выхода в навбаре

    public function PersonControl(){

        if(array_key_exists('login', $_SESSION) && $_SESSION['login']==$this->loginControl && $_SESSION['password']==$this->passwordControl && array_key_exists('password', $_SESSION)){
            echo "<p>Вы уже вошли в систему!</p>";
            echo "<form method='post'>
                    <button name='exit' value='1'>Выход</button>
                  </form>";
        }
        else{
            ?>

            <p class="zad">Вход | регистрация</p><br>
            <form method="post">
                <input type="text" name="login" required>Логин<br>
                <input type="password" name="password" required>Пароль<br>
                <input type="submit" value="Вход">
            </form>
            <p><a href='reg.php' style="color: white">регистрация</a></p><br>

            <?php
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                $_SESSION['login']=$_POST['login'];
                $_SESSION['password']=sha1($_POST['password']);

                $sql=mysqli_query($this->connect, "select login, pas from clients where login='".$_SESSION['login']."' and pas='".$_SESSION['password']."'");
                $num=mysqli_num_rows($sql);

                if($num>0){
                    header('location: hello.php');
                }
                else{
                    echo "<p>не верный логин или пароль</p><br>";
                }

            }
        }
    }//проверка какой пользователь посетил страницу (авторизованный или нет), если нет, то предлагается форма для входа
}