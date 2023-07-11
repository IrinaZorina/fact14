<!-- Урок 11-12. Слайд 15. Задание 3. -->

<?php

// $_POST['password'] = md5($_POST['password']);
echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST['name'] == 'admin') {
    echo 'Доступ к секретным страницам открыт!';
} else {
    echo 'Выберите другой логин!';
}

    // if (isset($_POST['password']) and trim($_POST['password']) !== '') {
    //     echo 'Доступ к секретным страницам открыт!';
    // }
