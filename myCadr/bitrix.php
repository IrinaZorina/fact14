<?php
session_start();
$url = 'http://mycadr/bitrix.php';
$_SESSION['url']=$url;
// header('Location: /bitrix.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bitrix</title>
</head>

<body>
    <h1>Это страница Bitrix</h1>
</body>

</html>