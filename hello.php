<?php require_once 'inc/header.php'?>
    <title></title>
    <header class="headerReg">
    <section class="hello">
        <div><h3>Добро пожаловать на сайт</h3></div>
        <?php
        if($_SESSION['timesec1']>$_SESSION['timesec2']){
            echo "В последний раз вы посещали вкладку Bitrix";
        }
        elseif($_SESSION['timesec2']>$_SESSION['timesec1']){
            echo "В последний раз вы посещали вкладку Fact";
        }
        ?>
    </section>
    </header>
    <?php require_once 'inc/footer.php' ?>