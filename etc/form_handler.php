<!-- Урок 11-12. Слайд 15. Задание 3. -->

<?php

$_POST['password'] = md5($_POST['password']);
echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST['name'] == 'admin' and $_POST['password'] == '202cb962ac59075b964b07152d234b70') {
    echo 'Доступ к секретным страницам открыт!';
} else {
    echo 'Проверьте пару логин/пароль';
}

    // if (isset($_POST['password']) and trim($_POST['password']) !== '') {
    //     echo 'Доступ к секретным страницам открыт!';
    // }
