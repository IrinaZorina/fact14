<?php
session_start();
$_SESSION['last_page'] = 'http://mycadr/fact.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fact</title>
</head>

<body>
    <h1>Это страница Fact</h1>
    <h3><a href="choice.php">Вернуться к выбору страниц</a></h3>
</body>

</html>