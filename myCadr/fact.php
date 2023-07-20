<?php
// session_start();
$lastpage = isset($_COOKIE['lastpage']) ? $_COOKIE['lastpage'] : 0;
$_COOKIE['lastpage'] = $lastpage;
$lastpage = 'http://mycadr/fact.php';
setcookie('fact', $lastpage,time()+3600,'/fact.php');
// session_reset();


// header('Location: /fact.php');
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
</body>

</html>