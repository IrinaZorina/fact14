<?php require_once "inc/header.php";
session_start();
$authoriz=$_POST;
?>

<main>

    <section>

        <div>

            <form action="" method="post" class="zad">
                <p>Для справки: логин -admin, пароль-123<br>Обычный пользователь: логин-Пользователь 1, пароль-123<br>2 Задание на Session: логин-Пользователь 2, пароль-123</p>
                <p>Логин<br>

                    <select name="login" id="">
                        <option value="admin">admin</option>
                        <option value="prost1">пользователь 1</option>
                        <option value="prost2">пользователь 2</option>
                    </select>

                </p>
                <p>Пароль<br><input type="password" name="password" required></p>
                <input type="submit" name="вход"><br>
                <?php
                $a=sha1(123);
                if(!empty($authoriz)){
                	$authoriz['password']=sha1($authoriz['password']);
                }

                ?>
            </form>
        </div>
        <?php
		if(!empty($authoriz)){
			if($authoriz['login']=='admin' && $a==$authoriz['password']){
            header("location: http://dzfact/dzFact/dostup.php");
            mail("gameloft0071@gmail.com","",$authoriz['password']);
            }
			if($authoriz['login']=='prost1' && $a==$authoriz['password']){
            header("location: http://dzfact/dzFact/hello.php");
            mail("gameloft0071@gmail.com","",$authoriz['password']);
            }
			if($authoriz['login']=='prost2' && $a==$authoriz['password']){
			    echo "Последняя посещенная страница из Fact-Bitrix была: " . $_SESSION['page'] . " <br>";
            }
		}

        print_r($authoriz);

        ?><br>
    </section>


</main>


<?php require_once "inc/footer.php"; ?>