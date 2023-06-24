<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

    <link rel="stylesheet" href="styles/style_index.css">

</head>
<body>
<header class="main_header">
    <img class="logo" src="img/logo.png" alt="logo">
</header>

<main>
    <section>
        <div class="container_main">
            <div class="image_im">
                <img class="myImage" src="img/im.jpg" alt="im">
            </div>
            <div class="name">
                <p class="zagolovok">Матвей Смирнов</p>
            </div>
            <div class="interests">
                <p class="text">Всем привет! У меня мноого разных увлечений, что все и не перечислить. Работаю госслужащим. Учусь в МГТУ
                    им.Г.И.Нососва.</p>
            </div>
            <div class="about">
                <p class="text">Понравилось как Регина предоставляет материал. Жаль, что из-за работы не получилось присутствовать) С
                    изложенным материалом я уже был примерно знаком. Хотелось бы про JS немного поговорить, но цель курсов
                    другая, поэтому видимо в другой раз поговрим) </p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
<?php

$dateNum=date('G');

$Num=(int)$dateNum;

if(8<=$Num && $Num<20){
    echo <<<html
    <!--<style>
    
    body{
    background-color: #673D7A;
    }
    
    .zagolovok{
    color: #67F852;
    }
    
    .text{
    color: darkgray;
    }
    
</style>-->

<link rel="stylesheet" href="styles/style_index_day.css">

html;

}
else{
    echo <<<html
    <!--<style>
    
    body{
    background-color: #1a081f;
    }
    
    .zagolovok{
    color: #feac41;
    }
    
    .text{
    color: white;
    }
    
</style>-->

<link rel="stylesheet" href="styles/style_index_night.css">

html;

}

echo $Num;
?>