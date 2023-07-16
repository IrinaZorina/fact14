<?php
session_start();
echo "Вы вошли как " . $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <a href="index.php">На главную</a>
    </p>
    <p>
        <a href="fact.php">Fact</a>
    </p>
    <p>
        <a href="bitrix.php">Bitrix</a>
    </p>
</body>

</html>