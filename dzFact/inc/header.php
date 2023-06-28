<?php

//тема!!!<

$dateNum=date('G');

$Num=(int)$dateNum;

if(8<=$Num && $Num<20){
    echo <<<html

<link rel="stylesheet" href="styles/style_index_day.css">

html;

}
else{
    echo <<<html

<link rel="stylesheet" href="styles/style_index_night.css">

html;

}

echo $Num;

//тема!!!>




?>


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

		<nav>
			<div class="nav_conteiner">

				<img class="logo" src="img/logo.png" alt="logo">

				<ul class="nav_menu">
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/">Главная</a></li>
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/cycles.php">Циклы</a></li>
				</ul>

			</div>


		</nav>

</header>
