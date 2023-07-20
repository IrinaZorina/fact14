<?php
$image = isset($_GET['img']) ? $_GET['img'] : 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // require "../customFunc/changeTheme.php";
    // changeTheme();
    ?>

    <title>get_post</title>
</head>

<body>
    <?php
    require "header.php";
    ?>
    <div class="main">
        <form class="form" action="" method="post">
            <input type="text" name="login">
            <input type="text" name="password">
            <input type="submit">
        </form>
        <br>
        <img src="image/<?= $image ?>.jpg" alt="#">
        <br>
        <a href="index.php?img=<?php echo ($image > 1) ? ($image - 1) : 5; ?>">Назад</a>
        <a href="index.php?img=<?php echo ($image < 5) ? ($image + 1) : 1; ?>">Вперед</a>
        <p>ЗАДАЧА. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы
            переключателей.
            Выведите на экран значения, которые ввел/выбрал пользователь.

        <form class="form" action="" method="post">
            <p>
                Логин: <input type="text" name="login">
                <pl>
                    <p>
                        Пароль: <input type="text" name="password">
                    </p>
                    <p>
                        1<input type="radio" name="radio">
                        2<input type="radio" name="radio">
                        3<input type="radio" name="radio">
                    </p>
                    <p>
                        on <input type="checkbox" name="check[]" value="on" id="">
                        off <input type="checkbox" name="check[]" value="off" id="">
                    </p>
                    <p><input type="submit" name="submit" id=""></p>
        </form>

        <p>ЗАДАЧА. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя,
            а пароль захешировать и сохранить его в массив $_POST
        <pre>
        <?php
        echo "<br>";
        $password = "";
        $algo = CRYPT_BLOWFISH;
        $hash = password_hash($password, $algo);
        // echo "Hash = <br>" . $hash;
        // print_r($arr2);
        $login = "";
        ?>
    </pre>
        <form class="form" action="" method="post">
            <label>Логин: <input type="text" name="login"></label>
            <label>Пароль: <input type="text" name="password"></label>
            <label><input type="submit" name="" id=""></label>
        </form>

        <p>ЗАДАЧА. Создать страницу для ввода имени пользователя (login) и пароля (passwd).
            Если пользователь вводит правильную пару (login/passwd),
            то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт.
            Login предлагается выбирать из списка
        <form class="form" action="" method="post">
            <label>
                Выберите логин
                <select name="selectForm" id="">
                    <option value="login">login</option>
                    <option value="kir">kir</option>
                </select>
            </label>
            <label><input type="text" name="login" placeholder="Введите логин из списка"></label>
            <label>Пароль: <input type="text" name="password"></label>
            <label><input type="submit" name="" id=""></label>
        </form>
        <pre>
    <?php
    echo "<br>";
    if (isset($_POST['login']) || isset($_POST['password'])) {
        $login = isset($_POST["login"]) ? $_POST['login'] : 1;
        $password = isset($_POST["password"]) ? $_POST['password'] : 1;
        foreach ($_POST as $key => $value) {
            if ($_POST["login"] == 'login' || $_POST["login"] == 'kir' && $_POST["password"] == 'password') {
                echo "Доступ к данным открыт! ";
            } else {
                echo "Ошибка доступа! ";
            }
        }
    }
    ?>
</pre>

        <p>ЗАДАЧА. Создайте форму генерации ссылки с параметром:
            Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
            При нажатии на кнопку должно быть сформирована
            ссылка следующего вида: phpcourse.php?l=3 ,
            где 3 – это номер выбранной лабораторной работы.
        <p>Выберите лабораторную
        <form action="phpcourse.php" method="get">
            <select name="lab" id="">
                <option value="l1">
                    <a href="phpcourse.php?l=1" target="_blank">Лаб1</a>
                </option>
                <option value="l2">
                    <a href="phpcourse.php?l=2" target="_blank"> Лаб2</a>
                </option>
                <option value="l3">
                    <a href="phpcourse.php?l=3" target="_blank">Лаб3</a>
                </option>
                <option value="l4">
                    <a href="phpcourse.php?l=4" target="_blank">Лаб4</a>
                </option>
            </select>
            <p>
                <input type="submit">
            </p>
        </form>

        <p>ЗАДАЧА. Отправить логины и комментарии на почту
            (значения должны сохраняться вместо тестового документа на электронный адрес).
            *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку
            \OpenServer\userdata\temp\email


        <form class="form" action=" " method="post">
            <label>Логин<input type="text" name="login" id=""></label>
            <label>Коментарии<input type="textarea" name="comment" id=""></label>
            <label><input type="submit" name="submit" id=""></label>
            <?php
            $login = isset($_POST['login']) ? $_POST['login'] : 1;
            $comment = isset($_POST['comment']) ? $_POST['comment'] : 1;
            // Избавимся от html сущностей
            $login = htmlspecialchars($login);
            $comment = htmlspecialchars($comment);
            // Закодируем строку если она будет использоваться в запросе
            $login = urldecode($login);
            $comment = urldecode($comment);
            // Обрежем пробелы в строке
            $login = trim($login);
            $comment = trim($comment);
            // Отправляем письмо
            mail(
                "/OpenServer\userdata\temp\email",
                "Отправка логина и коментария",
                "Логин: " . $login . "\n",
                "Комментарий: " . $comment . "\n",
                "From: index.php \r\n"
            )
                ?>
        </form>
        <p>ЗАДАЧА. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
            <?php
            echo "<br>";
            $login = isset($_POST['login']) ? $_POST['login'] : 1;
            $password = isset($_POST['password']) ? $_POST['password'] : 1;
            $password = "qwerty";
            $login = "kir";
            // Константа алгоритма шифрования
            $algo = CRYPT_BLOWFISH;
            $hash = password_hash($password, $algo);
            // echo $hash;
            $hash = '$2y$10$g005trYYgRqlErWXIBsbpOgNy9tXUJohtP7.Da3HqoeXlP0/e8gd.';
            if (password_verify('qwerty', $hash)) {
                echo "Пароль верный";
            } else {
                echo "Пароль не верный";
            }
            // print_r($_POST);
            ?>
        <form class="form" action="index.php" method="post">
            <label>Логин: <input type="text" name="login"></label>
            <label>Пароль: <input type="password" name="password" id="pass"></label>
            <label><input type="submit" name="submit" id=""></label>
        </form>
        <p>ЗАДАЧА. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя
            («да» или «нет»). По умолчанию задайте везде значение «да».
            Напишите сценарий обработки анкеты: поставьте 1 балл,
            если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и
            «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18.
            Подсчитайте сумму набранных баллов:
            если она оказалась более 15, то результат: «У Вас покладистый характер»;
            если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков,
            но с вами можно ладить»;
            если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
            Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
        <h3>Анкета</h3>
        <form class="form" action="get_post.php" method="post">
            <p>1.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>2.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>3.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="">
            </p>
            <p>4.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>5.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>6.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>7.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>8.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>9.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="0">
            </p>
            <p>10.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="0">
            </p>
            <p>11.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>12.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>13.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="0">
            </p>
            <p>14.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="0">
            </p>
            <p>15.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>16.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>17.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>18.
                да <input type="checkbox" name="ans[]" value="0">
                нет <input type="checkbox" name="ans[]" value="1">
            </p>
            <p>19.
                да <input type="checkbox" name="ans[]" value="1">
                нет <input type="checkbox" name="ans[]" value="0">
            </p>

            <p>
                <input type="submit" name="submit">
            </p>
        </form>
        <pre>
    <?php

    $sum = 0;
    if (isset($_POST['ans'])) {
        $value = isset($_POST['value']) ? $_POST['value'] : 0;
        $ans = isset($_POST['ans']) ? $_POST['ans'] : 0;
        foreach ($ans as $value) {
            $sum += (int) $value;
        }
    }
    echo "Число баллов = $sum <br>";

    switch ($sum) {
        case ($sum > 15):
            echo "У Вас покладистый характер";
            break;
        case ($sum >= 8 && $sum <= 15):
            echo "Вы не лишены недостатков, но с вами можно ладить";
            break;
        default:
            echo "Вашим друзьям можно посочувствовать";
            break;
    }
    // print_r($_POST);
    ?>
     </pre>
    </div>
    <!-- ==================FOOTER======================= -->
    <?php
    require_once "footer.php";
    ?>
</body>

</html>