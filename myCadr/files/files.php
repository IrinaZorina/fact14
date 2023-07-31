<?php
print_r($_FILES);

// Это только откроет файл
// $file=fopen('text.txt','r');
// // Теперь читаем
// if(!$file){
//     "Ошибка открытия файла";
// }
// // $char=fgetc($file);
// while(false!=($char=fgetc($file))) { 
//     echo "$char <br>";
// }
// // echo $str;


if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "\academy\images" . $_FILES['file']['name']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once "../../customFunc/changeTheme.php";
    changeTheme();
    ?>
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" name="login" id="">
        <input type="password" name="password" id="">
        <input type="submit" name="submit" id="">
        <input type="file" name="file" id="">
    </form>

    <p>ЗАДАЧА. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'
        <?php
        $openFile = fopen('hello.txt', 'w');
        $str = "Hello, world! I'm Kirill";
        fwrite($openFile, $str);
        ?>
        
    <p> ЗАДАЧА. Создайте папку 'test'.
        <?php
        if (!is_dir('test')) {
            mkdir('test');
        }
        ?>
    <p>ЗАДАЧА. Дан текстовый документ, в котором есть: имя, фамилия, обратная связь.
        Вывести на экран только имя и фамилию.
        <?php
        echo "<br>";
        // функцией file() преобразуем наш файл в массив строк
        $arrInfo = file('contacts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        // В цикле отсекаем все лишние символы и html теги
        foreach ($arrInfo as $key => $value) {
            htmlspecialchars($value);
        }
        //  print_r($arrInfo);
        // Печатаем нужные элементы массива
        echo $arrInfo[0] . "<br>";
        echo $arrInfo[1] . "<br>";
        ?>

    <p>ЗАДАЧА. Даны два файла, состоящие из предложений.
        Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов.
        Повторы не добавлять в третий файл.
        <?php
        echo '<br>';
        $openFile1 = fopen('file41.txt', 'r');
        // узнаем тип данных. var_dump($openFile1);
// Запишем тип данных resourse в строку. Берем все данные с 0 указателя
        $str1 = stream_get_contents($openFile1, -1, 0);
        $openFile2 = fopen('file42.txt', 'r');
        // Запишем тип данных resourse в строку. Берем все данные с 0 указателя
        $str2 = stream_get_contents($openFile2, -1, 0);
        //Запишем строку в массив 
        $arr1 = explode(' ', $str1);
        $arr2 = explode(' ', $str2);
        // Объединим массивы
        $arrMerge = array_merge($arr1, $arr2);
        // Уберем повторы
        $arrUnique = array_unique($arrMerge);
        // Откроем 3 файл для записи
        $openFile3 = fopen('file43.txt', 'w');
        // Т.к fwrite работает со строкой, сделаем из массива строку
        $strResult = implode(' ', $arrUnique);
        // Записываем все совпадения
        fwrite($openFile3, $strResult);
        echo "ОТВЕТ в файле file43.txt";
        ?>

    <p>ЗАДАЧА. Даны два файла, состоящие из предложений.
        Создать третий файл, содержащий все повторяющиеся предложения.
        <?php
        echo '<br>';
        $openFile1 = fopen('file51.txt', 'r');
        // узнаем тип данных. var_dump($openFile1);
        // Запишем тип данных resourse в строку. Берем все данные с 0 указателя
        $str1 = stream_get_contents($openFile1, -1, 0);
        $openFile2 = fopen('file52.txt', 'r');
        // Запишем тип данных resourse в строку. Берем все данные с 0 указателя
        $str2 = stream_get_contents($openFile2, -1, 0);
        //Запишем строку в массив 
        $arr1 = explode(' ', $str1);
        $arr2 = explode(' ', $str2);
        // Найдем совпадения в массивах
        $arrResult = array_intersect($arr1, $arr2);
        // Откроем 3 файл для записи
        $openFile3 = fopen('file53.txt', 'w');
        // Т.к fwrite работает со строкой, сделаем из массива строку
        $strResult = implode(' ', $arrResult);
        // Записываем все совпадения
        fwrite($openFile3, $strResult);
        echo "ОТВЕТ в файле file53.txt";
        ?>
</body>

</html>