<?php require_once 'inc/header.php'; ?>
<main class="wow some-text">

    <!-- Создайте папку 'files'. -->

    <?php

    // mkdir("files");

    ?>

    <!-- Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'. -->

    <?php

    // $file = file_get_contents('files/hello.txt');
    // $file = 'Hello, world! I am Batman!';
    // file_put_contents('files/hello.txt', $file);

    ?>

    <!-- Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию. -->

    <?php

    // $file = file_get_contents('files/text.txt');
    // $file = 'Nazarov Ruslan lov3helm@gmail.com';
    // file_put_contents('files/text.txt', $file);
    // $arr = explode(' ', $file);
    // echo $arr[0] . ' ' . $arr[1];

    ?>

    <!-- Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. 
    Повторы не добавлять в третий файл. -->

    <?php

    $file1 = file_get_contents('files/txt1.txt');
    $file1 = 'Попробуй эти вкусные яблоки. Ты молодец!';
    file_put_contents('files/txt1.txt', $file1);

    $file2 = file_get_contents('files/txt2.txt');
    $file2 = 'Погода сегодня шикарная. Ты молодец!';
    file_put_contents('files/txt2.txt', $file2);

    $arr1 = explode('. ', $file1);
    $arr2 = explode('. ', $file2);
    // print_r($arr1);
    // echo '<br>';
    // print_r($arr2);
    // echo '<br>';
    $file3 = array_merge($arr1, $arr2);
    // print_r($file3);
    // echo '<br>';
    $file3 = implode('. ', array_diff($file3, array_diff_assoc($file3, array_unique($file3))));
    // print_r($file3);
    // echo $file3;
    file_put_contents('files/txt3.txt', $file3);

    // $array = array("Красный", "Желтый", "Красный", "Белый");
    // $result = array_diff($array, array_diff_assoc($array, array_unique($array)));
    // print_r($result);

    // array_unique - убирает повторяющиеся элементы в массиве (первый элемент сохраняется).
    // array_diff_assoc - сравнивает 1 массив с другими массивами и возвращает значения из 1 массива, которые отсутствуют в других массивах (ключи учитываются).
    // array_diff - то же, но не учитывает ключи.
    ?>

    <!-- Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения. -->

    <?php

    // файлы уже созданы

    $file4 = array_intersect($arr1, $arr2);
    // print_r($file4);
    file_put_contents('files/txt4.txt', $file4);
    ?>

</main>
<?php require_once 'inc/footer.php'; ?>