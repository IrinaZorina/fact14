<?php require_once 'inc/header.php' ?>
<main>
    <p><strong>Задачи на строки</strong></p>
    <br>
    <?php
    echo 'Задание. Дана строка «fact». Привести строку к виду «Fact».';
    $fakt = 'fact';
    echo '<br>';
    echo str_replace("f", "F", $fakt);
    echo '<br>';
    echo '<br>';
    echo 'Задание. Дана строка, в которой содержится «фамилия, имя, отчество». 
    Преобразовать строку к виду «имя, фамилия».
    Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».';
    echo '<br>';
    echo '<br>';
    $fio = 'Закирова Регина Артуровна';
    $words = explode(' ', $fio);
    $reversfio = $words[1] . ' ' . $words[0];
    echo $reversfio;
    echo '<br>';
    echo '<br>';
    echo 'Дана строка «Привет, мИр». Найти количество символа «и» в строке (регистр учитывать). ';
    echo '<br>';
    $str = "Привет, мИр";
    $char = mb_strtolower($str);
    echo mb_substr_count($char,'и');
    echo '<br>';
    echo '<br>';
    echo 'Дана строка html css php. Вырежьте из нее и выведите на экран слово html, слово css и слово php.';
    echo '<br>';
    $a = 'html css php';
    echo '<br>';
    echo substr($a, 0, 4);
    echo '<br>';
    echo substr($a, 5, -4);
    echo '<br>';
    echo substr($a, 9);
    echo '<br>';
    echo '<br>';
    echo 'Дана строка. Проверьте, что она заканчивается на .png. Если это так, выведите да, если не так - нет.';
    echo '<br>';
    $i = 'improw.png';
    $b = substr($i, -3);
    if ($b == 'png') {
        echo 'да';
    } else {
        echo 'нет';
    }
    echo '<br>';
    echo '<br>';
    echo 'Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.
Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.';
    echo '<br>';
    echo '<br>';
    $string = 'Hello world';
    $length = strlen($string);
    if ($length > 5) {
        $shreder = substr($string, 5);
        echo $shreder . '...';
    }
    echo '<br>';
    if ($length < 5) {
        echo $string;
    }
    echo '<br>';
    echo '<br>';
    echo 'Дана строка $str. Замените в ней все буквы a на цифру 1, буквы b - на 2, а буквы c - на 3.';
    echo '<br>';
    echo '<br>';
    $str = 'anbkcr';
    echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);
    echo '<br>';
    echo '<br>';
    echo 'Дана строка abc abc abc. Определите позицию последней буквы b.';
    echo '<br>';
    echo '<br>';
    $str = 'abc abc abc';
    $lastBPosition = strrpos($str, 'b');
    echo $lastBPosition;
    echo '<br>';
    echo '<br>';
    echo 'Дана строка html css php. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.';
    echo '<br>';
    echo '<br>';
    $str = 'html css php';
    $array = explode(' ', $str);
    print_r($array);
    echo '<br>';
    echo '<br>';
    echo 'В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.';
    echo '<br>';
    echo '<br>';
    $date1 = '10-02-2015';
    $date2 = '20-02-2015';
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);
    $days = $interval->days;

    echo "Количество дней между датами: $days";
    echo '<br>';
    echo '<br>';
    echo 'Подсчитать количество гласных букв на вашей странице.';
    echo '<br>';
    echo '<br>';
    $pageContent = 'echo " $date1 - дата рождения, $date2 - текущее значение, разность: $days";
    ?>
    <section class="conteaner">
        <div class="images"></div>
        <div class="name"><strong>Камнев Валентин</strong></div>
        <div class="aboutMe">Всем привет! Меня зовут Валентин, работаю контент менеджером в компании “Торговый дом
            ФАЗА”. Люблю путешествовать, обожаю горы, часто выезжаю на трекинг. Интересуюсь восточной культурой и
            философией, занимаюсь йогой. После окончания курсов планирую переехать в Москву для работы в офисе нашей
            компании программистом.</div>
        <div class="myOpinion">Мнение о курсе сложно составить по одному уроку, на данный момент могу отметить
            небольшое количество учащихся, что позволит проработать индивидуально ошибки. Так же понравился формат
            обучения и внимательность преподавателя к каждому человеку, заставляет включатся активнее в процесс.
        </div>
    </section>
    <br>
    <br>
    <section class="conteanerTemple">
        <div class="paragraph1"> <strong>Достопримечательности Азии.</strong></div>
        <div class="griditem">
            <div class="Angkor"></div>
            <p>Храмовый комплекс <br> Ангкор-Ват.<br>Сиемреап север Камбоджи.</p>
        </div>
        <div class="griditem">
            <div class="Kailash"></div>
            <p>Кайласанатха.<br> Центральное сооружение <br> комплекса храмов в Эллоре.</p>
        </div>
        <div class="griditem">
            <div class="Karli"></div>
            <p>Пещеры Карли. <br>Индийский штат<br>Махараштра.</p>
        </div>
        <div class="griditem">
            <div class="PhrayaNakhon"></div>
            <p>Пещера Прайя Накхон <br> в <br> Таиланде.</p>
        </div>
    </section>
    <section class="conteanerStatues">
        <div class="paragraph2"><strong>Одни из самых высоких статуй мира.</strong></div>
        <div class="statue">
            <div class="bigBuddha"></div>
            <p>Будда Майтрея <br> Лэшань.</p>
        </div>
        <div class="statue">
            <div class="guanYu"></div>
            <p>Статуя Гуань Юя. <br>Город Юньчэн.</p>
        </div>
        <div class="statue">
            <div class="garudaWisnuKencana"></div>
            <p>Гаруда-Вишну-Кенчана. <br> Бали, Индонезия.</p>
        </div>
        <div class="statue">
            <div class="vallabhbhaiPatel"></div>
            <p>Статуя Единства. <br> Памятник в виде статуи <br> в честь Валлабхаи Пателя</p>
        </div>
    </section>
</main>';

// Убираем все теги и оставляем только текст
$contentText = strip_tags($pageContent);

// Убираем пробелы, переносы строк и другие символы, не являющиеся буквами
$contentText = preg_replace('/[^a-zA-Zа-яА-ЯёЁ]/u', '', $contentText);

// Считаем количество букв
$letterCount = mb_strlen($contentText);

echo "Количество букв в контенте страницы: " . $letterCount;
echo '<br>';
echo '<br>';

$pageContent = 'echo " $date1 - дата рождения, $date2 - текущее значение, разность: $days";
    ?>
    <section class="conteaner">
        <div class="images"></div>
        <div class="name"><strong>Камнев Валентин</strong></div>
        <div class="aboutMe">Всем привет! Меня зовут Валентин, работаю контент менеджером в компании “Торговый дом
            ФАЗА”. Люблю путешествовать, обожаю горы, часто выезжаю на трекинг. Интересуюсь восточной культурой и
            философией, занимаюсь йогой. После окончания курсов планирую переехать в Москву для работы в офисе нашей
            компании программистом.</div>
        <div class="myOpinion">Мнение о курсе сложно составить по одному уроку, на данный момент могу отметить
            небольшое количество учащихся, что позволит проработать индивидуально ошибки. Так же понравился формат
            обучения и внимательность преподавателя к каждому человеку, заставляет включатся активнее в процесс.
        </div>
    </section>
    <br>
    <br>
    <section class="conteanerTemple">
        <div class="paragraph1"> <strong>Достопримечательности Азии.</strong></div>
        <div class="griditem">
            <div class="Angkor"></div>
            <p>Храмовый комплекс <br> Ангкор-Ват.<br>Сиемреап север Камбоджи.</p>
        </div>
        <div class="griditem">
            <div class="Kailash"></div>
            <p>Кайласанатха.<br> Центральное сооружение <br> комплекса храмов в Эллоре.</p>
        </div>
        <div class="griditem">
            <div class="Karli"></div>
            <p>Пещеры Карли. <br>Индийский штат<br>Махараштра.</p>
        </div>
        <div class="griditem">
            <div class="PhrayaNakhon"></div>
            <p>Пещера Прайя Накхон <br> в <br> Таиланде.</p>
        </div>
    </section>
    <section class="conteanerStatues">
        <div class="paragraph2"><strong>Одни из самых высоких статуй мира.</strong></div>
        <div class="statue">
            <div class="bigBuddha"></div>
            <p>Будда Майтрея <br> Лэшань.</p>
        </div>
        <div class="statue">
            <div class="guanYu"></div>
            <p>Статуя Гуань Юя. <br>Город Юньчэн.</p>
        </div>
        <div class="statue">
            <div class="garudaWisnuKencana"></div>
            <p>Гаруда-Вишну-Кенчана. <br> Бали, Индонезия.</p>
        </div>
        <div class="statue">
            <div class="vallabhbhaiPatel"></div>
            <p>Статуя Единства. <br> Памятник в виде статуи <br> в честь Валлабхаи Пателя</p>
        </div>
    </section>
</main>';
$contentText = strip_tags($pageContent);
$count = 0;
$arrContentText = explode(" ", $contentText);
foreach ($arrContentText as $word) {
    if ($word !== " ") {
        $count++;
    }
}
echo "Количество слов на странице $count";

        ?>
</main>
<?php require_once 'inc/footer.php' ?>