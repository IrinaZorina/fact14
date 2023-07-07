<?php require_once 'inc/header.php'; ?>
<main>
    <section class="personal">
        <div class="wow photo"></div>
        <div class="wow name">Руслан Назаров</div>
        <div class="wow about-me">

            <?php

            function aboutMe($str)
            {
                $arr = explode('. ', $str);
                echo str_replace([$arr[0]], ["<span style='color:#e53170'>" . $arr[0] . "</span>"], $str);
            }

            $about_me = 'Всем привет. Меня зовут Руслан. Мне 30 лет. Я работаю в строительной сфере. Год назад захотелось сменить род деятельности, вследствие чего решил пройти курсы UI-дизайнера. Немного пофрилансил. Сейчас же снова работаю строителем. Из хобби чтение фэнтези-книг и видеоигры.';
            aboutMe($about_me);

            ?>

        </div>
        <div class="wow feedback">

            <?php

            function feedback($str)
            {
                $arr = mb_str_split($str);
                foreach ($arr as $key => $value) {
                    if ($key % 2 == 0) {
                        echo "<span style='color:#f582ae'>" . $value . "</span>";
                    } else {
                        echo "<span style='color:#e53170'>" . $value . "</span>";
                    }
                }
            }

            $feedback = 'Ознакомительный курс был очень интересным. После его прохождения начал смотреть обучающие видео по PHP - настолько мне он понравился.';
            feedback($feedback);

            ?>

        </div>
    </section>
    <section class="wow some-text">

        <?php

        function dateDiff($bday, $date)
        {
            $result = date_diff(date_create($bday), date_create($date));
            echo 'Дата моего дня рождения: ' . $bday . '<br>';
            echo 'Сейчас на дворе: ' . $date . '<br>';
            echo 'С момента моего дня рождения прошло следующее количество дней: ' . $result->days;
        }

        $bday = '19-05-1993';
        $date = date("d-m-Y");
        dateDiff($bday, $date);

        ?>

    </section>
    <section class="bookshelf">
        <div class="wow name-1">Мои любимые книги</div>
        <div class="about-book">
            <div class="wow book-1"></div>
            <div class="wow some-text">Путь королей. Книга 1.<br>Архив Буресвета.</div>
        </div>
        <div class="about-book">
            <div class="wow book-2"></div>
            <div class="wow some-text">Кровь и железо. Книга 1.<br>Земной Круг.</div>
        </div>
        <div class="about-book">
            <div class="wow book-3"></div>
            <div class="wow some-text">Око мира. Книга 1.<br>Колесо Времени.</div>
        </div>
        <div class="about-book">
            <div class="wow book-4"></div>
            <div class="wow some-text">Имя ветра. Книга 1.<br>Хроники Убийцы Короля.</div>
        </div>
    </section>
    <section class="authors">
        <div class="wow name-1">Мои любимые авторы книг</div>
        <div class="about-author">
            <div class="wow author-1"></div>
            <div class="wow some-text">Брендон Сандерсон.</div>
        </div>
        <div class="about-author">
            <div class="wow author-2"></div>
            <div class="wow some-text">Джо Аберкромби.</div>
        </div>
        <div class="about-author">
            <div class="wow author-3"></div>
            <div class="wow some-text">Роберт Джордан.</div>
        </div>
        <div class="about-author">
            <div class="wow author-4"></div>
            <div class="wow some-text">Патрик Ротфусс.</div>
        </div>
    </section>
    <section>
        <div class="wow some-text">

            <?php

            $page = file_get_contents('index.php');

            function vowels($str)
            {
                $arr = mb_str_split($str);
                $vowels = 0;
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] == 'а' or $arr[$i] == 'А') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'е' or $arr[$i] == 'Е') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'ё' or $arr[$i] == 'Ё') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'и' or $arr[$i] == 'И') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'о' or $arr[$i] == 'О') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'у' or $arr[$i] == 'У') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'ы' or $arr[$i] == 'Ы') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'э' or $arr[$i] == 'Э') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'ю' or $arr[$i] == 'Ю') {
                        $vowels++;
                    }
                    if ($arr[$i] == 'я' or $arr[$i] == 'Я') {
                        $vowels++;
                    }
                }
                // preg_match_all('~(?<vowels>[аеёиоуыэюя])~iu', $page, $arr);
                // $vowels = count(array_filter($arr['vowels']));
                // echo $vowels . '<br>';
                echo 'Гласные буквы: ' . $vowels . '<br>';
            }

            function words($str)
            {
                $str = preg_replace('/[a-zA-Z]/i', ' ', $str);
                $str = str_replace(['-'], ' ', $str);
                $str = str_replace(["'"], ' ', $str);
                $words = str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
                // print_r($words);
                echo 'Слова: ' . count($words);
            }

            vowels($page);
            words($page);

            ?>

        </div>
    </section>
</main>
<?php require_once 'inc/footer.php'; ?>