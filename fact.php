<?php require_once 'inc/header.php' ?>
<br>
<title></title>
<?php
setcookie('login',date('Y-m-d H:i:s'),time() + 86400);
if(isset($_COOKIE['login'])){
    $datesession = $_COOKIE['login'];
    $date1 = strtotime($datesession);
    // echo $date1;
    $_SESSION['timesec2'] = $date1;
}

if(isset($_GET['color'])){
    $_SESSION['color'] = $_GET['color'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="GET">
        <label for="color">Выберите цвет фона и обновите страницу:</label>
        <select name="color" id="color">
            <option value="1">Black</option>
            <option value="2">White</option>
        </select>
        <input type="submit" value="Выбрать">
    </form>
</body>
</html>
<?php require_once 'inc/footer.php' ?>