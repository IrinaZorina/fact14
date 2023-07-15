<?php require 'inc/header.php'; ?>
<main class="wow some-text">

    <!-- 15 слайд. Задание 1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, 
    группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь. -->

    <!-- <?php
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            ?>

    <form action="" method="POST">
        <input type="text" name="name"><br>
        <textarea name="comment" cols="30" rows="10"></textarea><br>
        <input type="radio" name="radio" value="bg3">bg3<br>
        <input type="radio" name="radio" value="rdr2">rdr2<br>
        <input type="checkbox" name="check[]" value="sanderson">sanderson<br>
        <input type="checkbox" name="check[]" value="martin">martin<br>
        <button type="submit">Hello</button>
    </form> -->

    <!-- 15 слайд. Задание 2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, 
    а пароль захешировать и сохранить его в массив $_POST -->

    <!-- <?php

            $_POST['password'] = md5($_POST['password']);
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            ?>

    <form action="" method="POST">
        Логин <input type="text" name="name"><br>
        Пароль <input type="password" name="password"><br>
        <button type="submit">Hello</button>
    </form> -->

    <!-- 15 слайд. Задание 3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). 
    Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, 
    что доступ к секретным страницам открыт. Login предлагается выбирать из списка. -->

    <!-- <form action="etc/form_handler.php" method="POST">
        <select name="name">
            <option value="admin">admin</option>
            <option value="lov3helm">lov3helm</option>
            <option value="pupkin">pupkin</option>
        </select><br>
        Пароль <input type="password" name="password"><br>
        <button type="submit">Hello</button>
    </form> -->

    <!-- 15 слайд. Задание 4. Создайте форму генерации ссылки с параметром:
    1) Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
    2) При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , 
    где 3 – это номер выбранной лабораторной работы. -->

    <!-- <form action="etc/phpcourse.php" method="GET">
        <select name="l">
            <option value="1">Лаб1</option>
            <option value="2">Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select><br>
        <button type="submit">Hello</button>
    </form> -->

    <!-- 16 слайд. Задание 1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового 
    документа на электронный адрес). 
    *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку 
    \OpenServer\userdata\temp\email -->

    <!-- <form action="etc/sandmail.php" method="POST">
        <input type="email" name="email" placeholder="Введите ваш email" required><br>
        <textarea name="message" placeholder="Введите ваше сообщение" cols="30" rows="10" required></textarea><br>
        <button type="submit">Push</button>
    </form> -->

    <!-- 16 слайд. Задание 2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер. -->

    <!-- <?php

            $_POST['password'] = md5($_POST['password']);
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            ?>

    <form action="" method="post">
        Логин: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <button type="submit">Push</button>
    </form> -->

    <!-- 16 слайд. Задание 3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). 
    По умолчанию задайте везде значение «да».
    Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 
    3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. 
    Подсчитайте сумму набранных баллов:
    1) если она оказалась более 15, то результат: «У Вас покладистый характер»;
    2) если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
    3) если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
    Отобразите на экране имя анкетируемого, фразу-результат анкетирования. -->

    <?php

    $count = 0;
    $name = $_GET['name'] ?? '0';
    for ($i = 1; $i <= 19; $i++) { // я долго ломал голову как сделать вопросы под конкретными номерами, в результате решил сделать четные нечетные номера вопросов
        if (isset($_GET[$i]) and $i % 2 == 0 and $_GET[$i] == 'no') {
            $count++;
        } elseif (isset($_GET[$i]) and $i % 2 != 0 and $_GET[$i] == 'yes') {
            $count++;
        }
    }
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    if ($count > 15) {
        echo $name . ', у Вас покладистый характер!' . '<br>';
    } elseif ($count > 8 and $count <= 15) {
        echo $name . ', Вы не лишены недостатков, но с Вами можно ладить!' . '<br>';
    } elseif ($count > 0 and $count <= 8) {
        echo $name . ', Вашим друзьям можно посочувствовать!' . '<br>';
    }
    echo '<br>';
    ?>

    <form action="">
        <label for="name">Ваше имя: <input type="text" id="name" name="name"></label><br>
        <h4>1. Вы любите чай:</h4>
        <label for="yes1"><input type="radio" name="1" id="yes1" value="yes" checked>Да</label>
        <label for="no1"><input type="radio" name="1" id="no1" value="no">Нет</label><br>
        <h4>2. Вы любите кофе:</h4>
        <label for="yes2"><input type="radio" name="2" id="yes2" value="yes" checked>Да</label>
        <label for="no2"><input type="radio" name="2" id="no2" value="no">Нет</label><br>
        <h4>3. Вы мужчина:</h4>
        <label for="yes3"><input type="radio" name="3" id="yes3" value="yes" checked>Да</label>
        <label for="no3"><input type="radio" name="3" id="no3" value="no">Нет</label><br>
        <h4>4. Вы женщина:</h4>
        <label for="yes4"><input type="radio" name="4" id="yes4" value="yes" checked>Да</label>
        <label for="no4"><input type="radio" name="4" id="no4" value="no">Нет</label><br>
        <h4>5. Вам нравится рок:</h4>
        <label for="yes5"><input type="radio" name="5" id="yes5" value="yes" checked>Да</label>
        <label for="no5"><input type="radio" name="5" id="no5" value="no">Нет</label><br>
        <h4>6. Вам нравятся русские народные сказки:</h4>
        <label for="yes6"><input type="radio" name="6" id="yes6" value="yes" checked>Да</label>
        <label for="no6"><input type="radio" name="6" id="no6" value="no">Нет</label><br>
        <h4>7. Вы любите сладости:</h4>
        <label for="yes7"><input type="radio" name="7" id="yes7" value="yes" checked>Да</label>
        <label for="no7"><input type="radio" name="7" id="no7" value="no">Нет</label><br>
        <h4>8. Вы едите курицу по утрам:</h4>
        <label for="yes8"><input type="radio" name="8" id="yes8" value="yes" checked>Да</label>
        <label for="no8"><input type="radio" name="8" id="no8" value="no">Нет</label><br>
        <h4>9. Вы душа компании:</h4>
        <label for="yes9"><input type="radio" name="9" id="yes9" value="yes" checked>Да</label>
        <label for="no9"><input type="radio" name="9" id="no9" value="no">Нет</label><br>
        <h4>10. Вы разводите собак:</h4>
        <label for="yes10"><input type="radio" name="10" id="yes10" value="yes" checked>Да</label>
        <label for="no10"><input type="radio" name="10" id="no10" value="no">Нет</label><br>
        <h4>11. У вас есть домашние питомцы:</h4>
        <label for="yes11"><input type="radio" name="11" id="yes11" value="yes" checked>Да</label>
        <label for="no11"><input type="radio" name="11" id="no11" value="no">Нет</label><br>
        <h4>12. У вас есть комнатные растения:</h4>
        <label for="yes12"><input type="radio" name="12" id="yes12" value="yes" checked>Да</label>
        <label for="no12"><input type="radio" name="12" id="no12" value="no">Нет</label><br>
        <h4>13. У вас есть брат:</h4>
        <label for="yes13"><input type="radio" name="13" id="yes13" value="yes" checked>Да</label>
        <label for="no13"><input type="radio" name="13" id="no13" value="no">Нет</label><br>
        <h4>14. Вы увлекаетесь историей:</h4>
        <label for="yes14"><input type="radio" name="14" id="yes14" value="yes" checked>Да</label>
        <label for="no14"><input type="radio" name="14" id="no14" value="no">Нет</label><br>
        <h4>15. Вы увлекаетесь рисованием:</h4>
        <label for="yes15"><input type="radio" name="15" id="yes15" value="yes" checked>Да</label>
        <label for="no15"><input type="radio" name="15" id="no15" value="no">Нет</label><br>
        <h4>16. Вам нравится программирование:</h4>
        <label for="yes16"><input type="radio" name="16" id="yes16" value="yes" checked>Да</label>
        <label for="no16"><input type="radio" name="16" id="no16" value="no">Нет</label><br>
        <h4>17. Вы читаете книги:</h4>
        <label for="yes17"><input type="radio" name="17" id="yes17" value="yes" checked>Да</label>
        <label for="no17"><input type="radio" name="17" id="no17" value="no">Нет</label><br>
        <h4>18. Вы играете в видеоигры:</h4>
        <label for="yes18"><input type="radio" name="18" id="yes18" value="yes" checked>Да</label>
        <label for="no18"><input type="radio" name="18" id="no18" value="no">Нет</label><br>
        <h4>19. У вас есть компьютер:</h4>
        <label for="yes19"><input type="radio" name="19" id="yes19" value="yes" checked>Да</label>
        <label for="no19"><input type="radio" name="19" id="no19" value="no">Нет</label><br>
        <button type="submit">Push</button>
    </form>

</main>
<?php require_once 'inc/footer.php'; ?>