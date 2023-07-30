<?php require_once 'inc/header.php' ?>
<body>
<?php
    $currentHour = date("H");
    if ($currentHour >= 8 && $currentHour < 20) {
        echo '<link rel="stylesheet" href="/StylesVerefication/TaskStyleDay.css"';
    } else
        echo '<link rel="stylesheet" href="/StylesVerefication/TaskStyleNight.css">';
    ?>
    <form >
        <br>
        <label for="login">Имя пользователя :</label>
        <input id="login" type="text" name="login" placeholder="enter your login"><br>
        <br>
        <label for="Email">E-mail</label>
        <input id="Email" type="email" name="email" required placeholder="enter your E-mail"><br>
        <br>
        <label for="studying">Что мы изучаем?</label>
        <select name="stroka" id="studying">
            <option value="html">HTML</option>
            <option value="scc">SCC</option>
            <option value="php">PHP</option>
        </select>
        <fieldset>
            <br>
            <legend>Хочу быть...</legend>
            <input type="radio" name="radio" value="Junior PHP Developer">Junior PHP Developer
            <input type="radio" name="radio" value="Middle PHP Developer">Middle PHP Developer
            <input type="radio" name="radio" value="Front-end разработчик">Front-end разработчик
            <input type="radio" name="radio" value="Нее, хочу быть дизайнером">Нее, хочу быть дизайнером
        </fieldset>
        <fieldset>
            <legend>Мои навыки в программировании</legend>
            <input type="checkbox" name="god" value="god of programming">Бог программирования
            <input type="checkbox" name="guru" value="guru of programming">Гуру программирования
            <input type="checkbox" name="um" value="Um I'm still learning">Эм.. я еще учусь
        </fieldset>
        <br>
        <label for="time">Во сколько мне удобно приходить на занятия?</label>
        <input id="time" type="time">
        <br>
        <br>
        <label for="comments">Мои пожелания и комметнарии по курсам</label>
        <textarea id="comments" name="comment"></textarea>
        <br>
        <br>
        <button>Все, я справился с заполнением формы</button>
    </form>
    <br>
    <br>
    <table cellspacing="0">
        <tr>
            <td class="tdTest" style="background-color: cornflowerblue; vertical-align: middle;" colspan="2"
                height="70px">Хомяк <img class="images" src="/images/hi.gif" alt="Hi"></td>
        </tr>
        <tr>
            <td class="tdTest" style="background-color: blanchedalmond;" rowspan="2">ячейка 3 <br> ячейка 5 </td>
            <td class="tdTest" style="background-color: aqua;">ячейка 4</td>
        </tr>
        <tr>
            <td class="tdTest" style="background-color: chartreuse;">ячейка 6</td>
        </tr>
    </table>
    <br>
    <table class="tableMendeleev" cellspacing="0">
        <tr>
            <td class="cell1">
                <div class="topleft" style="font-size: 25px;"><Strong>H</Strong></div>
                <div class="topright"><strong>1</strong></div>
                <div class="bottomleft"><strong>Водород</strong></div>
                <div class="bottomright">1,00797</div>
            </td>
            <td class="cell3" colspan=""></td>
            <td class="cell3" colspan=""></td>
        </tr>
        <tr>
            <td class="cell1">
                <div class="topleft" style="font-size: 20px;"><Strong>Li</Strong></div>
                <div class="topright"><strong>3</strong></div>
                <div class="bottomleft"><strong>Литий</strong></div>
                <div class="bottomright">6,939</div>
            <td class="cell1">
                <div class="topleft" style="font-size: 20px;"><Strong>Be</Strong></div>
                <div class="topright"><strong>4</strong></div>
                <div class="bottomleft"><strong>Берилий</strong></div>
                <div class="bottomright">9,0112</div>
            </td>
            <td class="cell2">
                <div class="topleft" style="font-size: 20px;"><Strong>B</Strong></div>
                <div class="topright"><strong>5</strong></div>
                <div class="bottomleft"><strong>Бор</strong></div>
                <div class="bottomright">10,811</div>
            </td>
        </tr>
        <tr>
            <td class="cell1">
                <div class="topleft" style="font-size: 20px;"><Strong>Na</Strong></div>
                <div class="topright"><strong>11</strong></div>
                <div class="bottomleft"><strong>Натрий</strong></div>
                <div class="bottomright">22,9898</div>
            <td class="cell1">
                <div class="topleft" style="font-size: 20px;"><Strong>Mg</Strong></div>
                <div class="topright"><strong>12</strong></div>
                <div class="bottomleft"><strong>Магний</strong></div>
                <div class="bottomright">24,312</div>
            </td>
            <td class="cell2">
                <div class="topleft" style="font-size: 20px;"><Strong>AL</Strong></div>
                <div class="topright"><strong>13</strong></div>
                <div class="bottomleft"><strong>Аллюминий</strong></div>
                <div class="bottomright">25,9815</div>
            </td>
        </tr>
    </table>
    <?php require_once 'inc/footer.php'?>