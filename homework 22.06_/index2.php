<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Профиль</title>
        <link rel="stylesheet" href="../styles/Styles.css">
    </head>
    <body>
    <?php
    $a = "Алия";
    $b = "35";
    echo "имя" .'-' . $a;
    echo "<br>";
    echo "возраст" .'-'.$b;
    echo "<br>";
    $time = date("H");
        $night = "20";
        $day ="08";
        if ($time > $day and $time <= $night) 
    {
        echo "<img src='../myProject/images/24hours/day.jpg'>";
    } 
    else
    {
        echo "<img src='../myProject/images/24hours/night.jpg'>";
    }
    ?>
    </body>
</html>