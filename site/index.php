<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $CurrentTime = date("H:i:s");
        $NightTimeStyle = "20:00:00";
        $DayTimeStyle = "08:00:00";
    
        if ($CurrentTime >= $NightTimeStyle or $CurrentTime < $DayTimeStyle) 
/*         Ночь */
        {
            echo '<link rel="stylesheet" href="./css/style_day.css">';
        } 
/*         День */
        else 
        {
            echo '<link rel="stylesheet" href="./css/style_night.css">';
        }
    ?>
</head>
<body>
    <section class="first-section root">
        <!-- Навигация -->
        <header class="header">
            <div class="header__logo">
                <img src="./img/logo1.jpg" alt="logo">
            </div>
            <nav class="header__text">
                <a href="table.html" target="_blank">Ссылка на таблицу Менделеева</a>
                <!-- Высчитываем гласные буквы -->
                <?php
                $url = "index.php";
                $text = file_get_contents($url);
                // Определяем регулярное выражение для поиска гласных букв
                $pattern = "/[аеёиоуыэюяaeiou]/i";

                // Подсчитываем количество гласных букв в тексте
                $count = preg_match_all($pattern, $text, $matches);

                // Выводим количество гласных букв
                echo "<br >Количество гласных букв: $count <br>";
                $x = "1988-05-31";
                $now = time(); // текущее время (метка времени)
                $your_date = strtotime($x); // какая-то дата в строке (1 января 2017 года)
                $datediff = $now - $your_date; // получим разность дат (в секундах)
                echo "Прошло времени в днях: " .floor($datediff / (60 * 60 * 24)); // вычислим количество дней из разности дат
                ?>
            </nav>
        </header>
        <!-- Основной блок -->
        <div class="name">
            <strong>Ольга Сонник</strong>                    
        </div>
        <div class="main-block">
            <!-- Левая часть -->
            <div class="main-block__left-part">
            </div>
            <!-- Правая часть -->
            <div class="main-block__right-part">
                <!-- Элементы -->
                    <!-- О себе -->
                <div class="about container">
                    <?php
                    $text = "Доброго дня! Я начинаю путь в новое для себя направление веб-разработки и хочу рассказать о том, чем занимаюсь последние годы:";
                    
                    // Разбиваем текст на предложения
                    $sentences = preg_split('/(?<=[.?!])\s+/', $text);
                    
                    // Окрашиваем первую фразу в красный цвет
                    $firstSentence = "<span style='color: #BC2041;'>{$sentences[0]}</span>";
                    
                    // Выводим текст с окрашенной первой фразой
                    echo "$firstSentence ";
                    
                    // Выводим остальные предложения
                    for ($i = 1; $i < count($sentences); $i++) {
                        echo $sentences[$i];
                    }
                    ?>
                    
                    <ul>
                        <li>Моя основная сфера деятельности уже более 10 лет- управление магазинами цифровой и бытовой техники.</li>
                        <li>Любимое увлечение - создание бренда вязаной одежды Wooly Pleasure. Вещи, созданные моими руками, обрели своих владельцев в самых отдаленных уголках нашей страны и мира.</li>
                        <li>Очень люблю путешествовать и узнавать новые культуры. Этой весной мне удалось прожить полтора месяца во Вьетнаме и окунуться в колорит юго-восточной Азии.</li>
                        <li>Программирование изучаю с осени 2022 года и надеюсь в дальнейшем сделать его своим основным видом деятельности.</li>
                    </ul>

                </div>
                <!-- что понравилось -->
                <div class="like container">
                <?php
                $text = "На первом занятии мне удалось повторить и 'разложить по полочкам' изученный самостоятельно материал. <br>
                Мне очень понравилось, как Регина преподносит материал и взаимодействует с группой. У нее яркая и эмоциональная речь, которая погомает концентрироваться на текущей теме, что особенно важно при удаленном изучении курса. <br>
                Сразу чувствуется открытая и светлая энергетика, которая никого не оставит равнодушным. <br>
                Так же стоит отметить ее внимание и готовность помочь каждому ученику, что позволяет чувствовать себя важным элементом нашей небольшой команды. <br>
                Надеюсь, что и последующие уроки будут проходить так же комфортно, а материал усваиваться легко и быстро.";

                // Разбиваем текст на слова
                $words = explode(" ", $text);

                // Окрашиваем каждое четное слово в один цвет, а каждое нечетное слово в другой цвет
                for ($i = 0; $i < count($words); $i++) {
                    if ($i % 2 == 0) {
                        $words[$i] = "<span style='color: #65483D;'>{$words[$i]}</span>";
                    } else {
                        $words[$i] = "<span style='color: #9E8279;'>{$words[$i]}</span>";
                    }
                }

                // Выводим текст с окрашенными словами
                echo implode(" ", $words);
                ?>
                </div>
            </div>
        </div>
    </section>
<!--     Задание по 3му уроку -->
    <section class="second-section root">
        <div class="second-section__text">
            <strong>Фрукты</strong>
        </div>
        <div class="second-section__first-part">
            <div class="second-section__block root">
                <div class="second-section__block__img root">
                    <img src="./img/ripe-blackberries-levitate-on-a-white-background-200x200.jpg" alt="blackberries">
                </div>
                <div class="second-section__block__text root">
                    Ежевика
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/red-cherry-berries-levitate-on-a-white-background-200x200.jpg" alt="cherry">
                </div>
                <div class="second-section__block__text">
                    Черешня
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/ripe-blueberries-levitate-on-a-white-background-200x200.jpg" alt="blueberries">
                </div>
                <div class="second-section__block__text">
                    Голубика
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/strawberry-berry-levitating-on-a-white-background (1)-200x200.jpg" alt="strawberry">
                </div>
                <div class="second-section__block__text">
                    Клубника
                </div>
            </div>
        </div>
        <div class="second-section__text">
            <strong>Овощи</strong>
        </div>
        <div class="second-section__second-part">
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/green-broccoli-levitating-on-a-white-background-400x400.jpg" alt="broccoli">
                </div>
                <div class="second-section__block__text">
                    Брокколи
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/red-hot-pepper-levitates-on-a-white-background-400x400.jpg" alt="pepper">
                </div>
                <div class="second-section__block__text">
                    Перец
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/red-tomatoes-levitate-on-a-white-background-400x400.jpg" alt="tomatoes">
                </div>
                <div class="second-section__block__text">
                    Помидор
                </div>
            </div>
            <div class="second-section__block">
                <div class="second-section__block__img">
                    <img src="./img/ripe-pumpkins-levitate-on-a-white-background-400x400.jpg" alt="pumpkin">
                </div>
                <div class="second-section__block__text">
                    Тыква
                </div>
            </div>
        </div>

    </section>
</body>
</body>
</html>