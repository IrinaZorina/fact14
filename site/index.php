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
            echo '<link rel="stylesheet" href="./css/style_night.css">';
        } 
/*         День */
        else 
        {
            echo '<link rel="stylesheet" href="./css/style_day.css">';
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
                    Доброго дня!
                    Я начинаю путь в новое для себя направление веб-разработки и хочу рассказать о том, чем занимаюсь последние годы:
                    <ul>
                        <li>Моя основная сфера деятельности уже более 10 лет- управление магазинами цифровой и бытовой техники.</li>
                        <li>Любимое увлечение - создание бренда вязаной одежды Wooly Pleasure. Вещи, созданные моими руками, обрели своих владельцев в самых отдаленных уголках нашей страны и мира.</li>
                        <li>Очень люблю путешествовать и узнавать новые культуры. Этой весной мне удалось прожить полтора месяца во Вьетнаме и окунуться в колорит юго-восточной Азии.</li>
                        <li>Программирование изучаю с осени 2022 года и надеюсь в дальнейшем сделать его своим основным видом деятельности.</li>
                    </ul>

                </div>
                <!-- что понравилось -->
                <div class="like container">
                    На первом занятии мне удалось повторить и "разложить по полочкам" изученный самостоятельно материал. <br>
                    Мне очень понравилось, как Регина преподносит материал и взаимодействует с группой. У нее яркая и эмоциональная речь, которая погомает концентрироваться на текущей теме, что особенно важно при удаленном изучении курса. <br>
                    Сразу чувствуется открытая и светлая энергетика, которая никого не оставит равнодушным. <br>
                    Так же стоит отметить ее внимание и готовность помочь каждому ученику, что позволяет чувствовать себя важным элементом нашей небольшой команды. <br>
                    Надеюсь, что и последующие уроки будут проходить так же комфортно, а материал усваиваться легко и быстро.
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