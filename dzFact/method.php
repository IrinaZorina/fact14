<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method</title>
</head>
<body>

<?php require_once "inc/header.php"?>

<p class="zad">задания закоментированны</p>

<!--1 задание-->

	<?php /*$a=$_POST;
echo "<br><span class='zad'>1 задание</span><br>";
	*/?><!--



    <form action="" method="post" class="zad">

        Текстовое поле <input type="text" name="pole"><br>
	    Многострочное поле <br><textarea name="mnogostr_pole" id="" cols="34" rows="5"></textarea><br>
	    <input name="check" type="radio" value="html">html<br>
	    <input name="check" type="radio" value="css">css<br>
	    <input name="check" type="radio" value="php">php<br>
	    <input type="checkbox" name="checkBox1" value="cool">круто<br>
	    <input type="checkbox" name="checkBox2" value="good">хорошо<br>
	    <input type="submit"><br>


    </form>

	--><?php /*print_r($a);
	echo "<br>";
	*/?>

<!--2 задание-->

<?php /*$a=$_POST;
echo "<br><span class='zad'>2 задание</span><br>";
	*/?><!--

<form action="" method="post" class="zad">

	<input type="text" name="login">логин<br>
	<input type="text" name="password">пароль<br>
	<input type="submit"><br>
	
	<?php
/*
	$a['password']=sha1($a['password']);
	
	echo "<span class='zad'>логин: " . $a['login'] . "</span><br>";
	echo "<span class='zad'>пароль: " . $a['password'] . "</span><br>";
	
	*/?>

</form>-->

<!--3 задание-->

<?php
echo "<br><span class='zad'>3 задание в разделе авторизация</span><br>";
?>



<!--4 задание-->

<?php /*$laba=$_POST;
echo "<br><span class='zad'>4 задание</span><br>";
*/?><!--

<p class="zad">форма генерации ссылки:<br>Ссылка только пустая<br></p>
    <div class="zad">
        <form action="" method="post">
            <select name="lab" id="">
                <option value="1">Лаб1</option>
                <option value="2">Лаб2</option>
                <option value="3">Лаб3</option>
                <option value="4">Лаб4</option>
            </select><br>
            <input type="submit">
        </form>
        <p>Ссылка на лабораторную работу:<br></p>
        <a href="" style="color: white"><?php /*echo "phpcourse.php?l=" . $laba["lab"] */?></a><br>
        <?php /*print_r($_POST);
        */?>
    </div>-->

<!--5 задание-->
<!--Возьмем формы из первого задания для отправки данных на почту-->
<?php
/*$a=$_POST;
echo "<br><span class='zad'>5 задание</span><br>";
*/?><!--

<form action="" method="post" class="zad">

    Текстовое поле <input type="text" name="pole"><br>
    Многострочное поле <br><textarea name="mnogostr_pole" id="" cols="34" rows="5"></textarea><br>
    <input name="check" type="radio" value="html">html<br>
    <input name="check" type="radio" value="css">css<br>
    <input name="check" type="radio" value="php">php<br>
    <input type="checkbox" name="checkBox1" value="cool">круто<br>
    <input type="checkbox" name="checkBox2" value="good">хорошо<br>
    <input type="submit"><br>

</form>
--><?php
/*$b=implode("\r\n", $a);
echo $b;
mail('gameloft0071@gmail.com','',$b);

*/?>

<!--6 задание-->

<?php /*$a=$_POST;
echo "<br><span class='zad'>6 задание</span><br>";
*/?><!--

<form action="" method="post">

    логин:<br><input type="text" name="login" required><br>
    пароль:<br><input type="password" name="password" required><br>
	<input type="submit">

</form>

--><?php
/*    $a['password']=sha1($a['password']);
    print_r($a);
    $b=implode("\r\n", $a);
    mail('gameloft0071@gmail.com','',$b);
    */?>

<!--7 задание-->
<?php
print_r($_POST);
$a=$_POST;
?>
<p>7 задание</p>
<p>Заполните анкету!</p>
<p>Введите Ваше имя:<br></p>
<form action="" method="post">
	<input type="text" name="0" required><br>
	1.Вы любите поговорить?
	<br><input type="radio" name="1" value="1" checked>да<br>
	<input type="radio" name="1" value="0">нет<br>
	2.Вы общительный человек?
	<br><input type="radio" name="2" value="1" checked>да<br>
	<input type="radio" name="2" value="0">нет<br>
	3.Легко ли вас вывести из себя?
	<br><input type="radio" name="3" value="1" checked>да<br>
	<input type="radio" name="3" value="0">нет<br>
	4.Ограничен ли ваш круг друзей?
	<br><input type="radio" name="4" value="1" checked>да<br>
	<input type="radio" name="4" value="0">нет<br>
	5.Легко ли вы принимаете разные решения?
	<br><input type="radio" name="5" value="1" checked>да<br>
	<input type="radio" name="5" value="0">нет<br>
	6.Вы предпочитаете делать всё медленно?
	<br><input type="radio" name="6" value="1" checked>да<br>
	<input type="radio" name="6" value="0">нет<br>
	7.У вас обострённое чувство справедливости?
	<br><input type="radio" name="7" value="1" checked>да<br>
	<input type="radio" name="7" value="0">нет<br>
	8.Тяжело ли вам проявлять терпимость по отношению к другим людям?
	<br><input type="radio" name="8" value="1" checked>да<br>
	<input type="radio" name="8" value="0">нет<br>
	9.Вы не ищете повода для ссоры первым?
	<br><input type="radio" name="9" value="1" checked>да<br>
	<input type="radio" name="9" value="0">нет<br>
	10.Вы конфликтный человек?
	<br><input type="radio" name="10" value="1" checked>да<br>
	<input type="radio" name="10" value="0">нет<br>
	11.Вы с трудом терпите недостатки других?
	<br><input type="radio" name="11" value="1" checked>да<br>
	<input type="radio" name="11" value="0">нет<br>
	12.Вы можете долго злиться и обижаться?
	<br><input type="radio" name="12" value="1" checked>да<br>
	<input type="radio" name="12" value="0">нет<br>
	13.Любите ли вы учить людей жизни?
	<br><input type="radio" name="13" value="1" checked>да<br>
	<input type="radio" name="13" value="0">нет<br>
	14.Вы всегда ищите в чём-то подвох?
	<br><input type="radio" name="14" value="1" checked>да<br>
	<input type="radio" name="14" value="0">нет<br>
	15.Как правило, много требуете от себя и от других.
	<br><input type="radio" name="15" value="1" checked>да<br>
	<input type="radio" name="15" value="0">нет<br>
	16.Не любите рассказывать о себе , чаще скрываетесь.
	<br><input type="radio" name="16" value="1" checked>да<br>
	<input type="radio" name="16" value="0">нет<br>
	17.Вы не очень уверены в своих силах?
	<br><input type="radio" name="17" value="1" checked>да<br>
	<input type="radio" name="17" value="0">нет<br>
	18.Вы относитесь к себе с критикой?
	<br><input type="radio" name="18" value="1" checked>да<br>
	<input type="radio" name="18" value="0">нет<br>
	19.Предпочитаете подчиняться, чем оказывать сопротивление.
	<br><input type="radio" name="19" value="1" checked>да<br>
	<input type="radio" name="19" value="0">нет<br>
	<input type="submit">
	<form action="" method="post">
		<input type="submit" value="обновить">
	</form>

	<?php
	$b=0;
	if(!empty($_POST)){
		for($i=1; $i!=20; $i++){
			$b+=$_POST[$i];
		}
		if($b==19){
			echo "<br>Вы не ответили!!!<br>";
		}
	}
	if(!empty($_POST) && $b!=19){
		$c=0;
		for($i=1; $i!=20; $i++){
			$c+=$_POST[$i];
		}
		if($c>15){
			echo '<br>' . $_POST[0] . ', у Вас покладистый характер';
		}
		elseif($c>=8 && $c<=15){
			echo '<br>' . $_POST[0] . ', Вы не лишены недостатков, но с вами можно ладить';
		}
		elseif ($c<15){
			echo '<br>' . $_POST[0] . ', Вашим друзьям можно посочувствовать';
		}

		echo '<br>Количество баллов: ' . $c;
	}





	?>

</form>



    <?php require_once "inc/footer.php"?>
</body>
</html>
