<?php require_once 'inc/header.php' ?>
<a href="authorization.php">Авторизация</a>
<!DOCTYPE html>
<html>
<head>
    <title>Пример формы</title>
</head>
<body>
    <form method="GET">
        <label for="text_field">Текстовое поле:</label>
        <input type="text" name="text_field" id="text_field" required><br><br>

        <label for="textarea_field">Многострочное поле:</label><br>
        <textarea name="textarea"  rows="4" cols="50"></textarea><br><br>

        <label>Группа выключателей:</label><br>
        <input type="checkbox" name="switch1" value="Switch 1">
        <label for="switch1">Switch 1</label><br>

        <input type="checkbox" name="switch2" value="Switch 2">
        <label for="switch2">Switch 2</label><br><br>

        <label>Группа переключателей:</label><br>
        <input type="radio" name="radio" value="Option 1" required>
        <label for="option1">Option 1</label><br>

        <input type="radio" name="radio" value="Option 2">
        <label for="option2">Option 2</label><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<br>
<?php
print_r($_GET)
?>

<br>
<br>

<!DOCTYPE html>
<html>
<head>
    <title>Пример формы</title>
</head>
<body>
    <form method="POST">
        <label for="Login">login:</label>
        <input type="text" name="log" id="Login"><br><br>

        <label for="Password">Password:</label><br>
        <input type="password" name = "pass" id ="Password">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?php
if(isset($_POST['pass'])){
$hash = password_hash($_POST['pass'],PASSWORD_DEFAULT);
$_POST['passhash']= $hash;
print_r($_POST['log']);
echo '<br>';
echo $_POST['passhash'];
}
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Вход</h1>
    <form method="POST">
        <label for="login">Логин:</label>
        <select name="login" id="login">
            <option value="user1">Пользователь 1</option>
            <option value="user2">Пользователь 2</option>
            <option value="user3">Пользователь 3</option>
        </select>
        <label for="passwd">Пароль:</label>
        <input type="password" name="passwd" id="passwd">
        <br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
<?php
$arr = [
'user1'=>'1',
'user2'=>'2',
'user3'=>'3'];
if(isset($_POST['login']) && isset($_POST['passwd'])){
    $login = $_POST['login'];
    $pass = $_POST['passwd'];
if(isset($arr[$login]) && $arr[$login]===$pass) {
    echo "Доступ к секретным страницам открыт";
}
else{
    echo "Ошибка авторизации";
} 
}
?>  
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Вход</h1>
    <form method="GET">
        <select name="l">
            <option value="1">Lab1</option>
            <option value="2">Lab2</option>
            <option value="3">Lab3</option>
            <option value="4">Lab4</option>
        </select>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?php 
if(isset($_GET['l'])){
    $labNumber = $_GET['l'];
    $link = 'phpcourse.php?1='.$labNumber;
    echo '<a href="' . $link . '">' . $link . '</a>';
}
?>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
    <title>Отправить логины и комментарии</title>
</head>
<body>
    <h1>Форма для отправки логинов и комментариев</h1>
    <form  method="post">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="comment">Комментарий:</label>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea>
        <br>
        <input type="submit" value="Отправить на почту">
    </form>
</body>
</html>
<?php
if(isset($_POST['login']) && isset($_POST['comment'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $comment = $_POST["comment"];
    $to = "\OSPanel\userdata\temp\email";
    $subject = "Логин и комментарий от пользователя";
    $message = "Логин: " . $login . "\nКомментарий: " . $comment;
    mail($to, $subject, $message);
}
}
?>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form action="GET_POST.php" method="post">
        <label for="username">Логин:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);    
    echo "Логин: " . $username . "<br>";
    echo "Хэшированный пароль: " . $hashedPassword . "<br>";
}
}
?>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
    <title>Опрос</title>
</head>
<body>
    <h1>Опрос</h1>
    <form action="GET_POST.php" method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="question1">Вопрос 1</label>
    <input type="radio" name="question1" value="yes" checked> Да
    <input type="radio" name="question1" value="no"> Нет
    <br>
    <label for="question2">Вопрос 2</label>
    <input type="radio" name="question2" value="yes" checked> Да
    <input type="radio" name="question2" value="no"> Нет
    <br>
    <label for="question3">Вопрос 3</label>
    <input type="radio" name="question3" value="yes" checked> Да
    <input type="radio" name="question3" value="no"> Нет
    <br>
    <label for="question4">Вопрос 4</label>
    <input type="radio" name="question4" value="yes" checked> Да
    <input type="radio" name="question4" value="no"> Нет
    <br>
    <label for="question5">Вопрос 5</label>
    <input type="radio" name="question5" value="yes" checked> Да
    <input type="radio" name="question5" value="no"> Нет
    <br>
    <label for="question6">Вопрос 6</label>
    <input type="radio" name="question6" value="yes" checked> Да
    <input type="radio" name="question6" value="no"> Нет
    <br>
    <label for="question7">Вопрос 7</label>
    <input type="radio" name="question7" value="yes" checked> Да
    <input type="radio" name="question7" value="no"> Нет
    <br>
    <label for="question8">Вопрос 8</label>
    <input type="radio" name="question8" value="yes" checked> Да
    <input type="radio" name="question8" value="no"> Нет
    <br>
    <label for="question9">Вопрос 9</label>
    <input type="radio" name="question9" value="yes" checked> Да
    <input type="radio" name="question9" value="no"> Нет
    <br>
    <label for="question10">Вопрос 10</label>
    <input type="radio" name="question10" value="yes" checked> Да
    <input type="radio" name="question10" value="no"> Нет
    <br>
    <label for="question11">Вопрос 11</label>
    <input type="radio" name="question11" value="yes" checked> Да
    <input type="radio" name="question11" value="no"> Нет
    <br>
    <label for="question12">Вопрос 12</label>
    <input type="radio" name="question12" value="yes" checked> Да
    <input type="radio" name="question12" value="no"> Нет
    <br>
    <label for="question13">Вопрос 13</label>
    <input type="radio" name="question13" value="yes" checked> Да
    <input type="radio" name="question13" value="no"> Нет
    <br>
    <label for="question14">Вопрос 14</label>
    <input type="radio" name="question14" value="yes" checked> Да
    <input type="radio" name="question14" value="no"> Нет
    <br>
    <label for="question15">Вопрос 15</label>
    <input type="radio" name="question15" value="yes" checked> Да
    <input type="radio" name="question15" value="no"> Нет
    <br>
    <label for="question16">Вопрос 16</label>
    <input type="radio" name="question16" value="yes" checked> Да
    <input type="radio" name="question16" value="no"> Нет
    <br>
    <label for="question17">Вопрос 17</label>
    <input type="radio" name="question17" value="yes" checked> Да
    <input type="radio" name="question17" value="no"> Нет
    <br>
    <label for="question18">Вопрос 18</label>
    <input type="radio" name="question18" value="yes" checked> Да
    <input type="radio" name="question18" value="no"> Нет
    <br>
    <label for="question19">Вопрос 19</label>
    <input type="radio" name="question19" value="yes" checked> Да
    <input type="radio" name="question19" value="no"> Нет
    <br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
if(isset($_POST['username'])){
    $User = $_POST['username'];
$answers = array('question1' => $_POST['question1'],
'question2' => $_POST['question2'],
'question3' => $_POST['question3'],'question4' => $_POST['question4'],
'question5' => $_POST['question5'],'question6' => $_POST['question6'],
'question7' => $_POST['question7'],'question8' => $_POST['question8'],
'question9' => $_POST['question9'],'question10' => $_POST['question10'],
'question11' => $_POST['question11'],'question12' => $_POST['question12'],
'question13' => $_POST['question13'],'question14' => $_POST['question14'],
'question15' => $_POST['question15'],'question16' => $_POST['question16'],
'question17' => $_POST['question17'],'question18' => $_POST['question18'],
'question19' => $_POST['question19']);
$scores = array('question1' => ($answers['question1'] == 'no') ? 1 : 0,
'question2' => ($answers['question2'] == 'no') ? 1 : 0,
'question3' => ($answers['question3'] == 'yes') ? 1 : 0,
'question4' => ($answers['question4'] == 'no') ? 1 : 0,
'question5' => ($answers['question5'] == 'no') ? 1 : 0,
'question6' => ($answers['question6'] == 'no') ? 1 : 0,
'question7' => ($answers['question7'] == 'no') ? 1 : 0,
'question8' => ($answers['question8'] == 'no') ? 1 : 0,
'question9' => ($answers['question9'] == 'yes') ? 1 : 0,
'question10' => ($answers['question10'] == 'yes') ? 1 : 0,
'question11' => ($answers['question11'] == 'no') ? 1 : 0,
'question12' => ($answers['question12'] == 'no') ? 1 : 0,
'question13' => ($answers['question13'] == 'yes') ? 1 : 0,
'question14' => ($answers['question14'] == 'yes') ? 1 : 0,
'question15' => ($answers['question15'] == 'no') ? 1 : 0,
'question16' => ($answers['question16'] == 'no') ? 1 : 0,
'question17' => ($answers['question17'] == 'no') ? 1 : 0,
'question18' => ($answers['question18'] == 'no') ? 1 : 0,
'question19' => ($answers['question19'] == 'yes') ? 1 : 0,
);
$totalScore = array_sum($scores);
if($totalScore>15){
    echo "$User У вас покладистый характер";
}
if($totalScore>=9 && $totalScore<=15){
    echo "$User  Вы не лишены недостатков, но с вами можно ладить";
}
if($totalScore<8){
    echo "$User  Вашим друзьям можно посочувствовать";
}
}
?>
<?php require_once 'inc/footer.php' ?>