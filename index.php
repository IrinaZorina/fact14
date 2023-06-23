<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <?php
    $time = date("H");
    $night = "20";
    $day = "08";
    if ($time > $day and $time <= $night) {
        echo '<link rel="stylesheet" href="styles/styles_day.css">';
    } else {
        echo '<link rel="stylesheet" href="styles/styles_night.css">';
    }
    ?>
    <title>Academy</title>
</head>

<body>
    <header>
        <div class="navigation">
            <a href="index.html">
                <div class="wow logo"></div>
            </a>
            <nav class="wow nav">
                <a href="table.html" class="item">Таблица</a> |
                <a href="forms.html" class="item">HTML-формы</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="personal">
            <div class="wow photo"></div>
            <div class="wow name">Руслан Назаров</div>
            <div class="wow about-me">Всем привет. Меня зовут Руслан. Мне 30 лет. Я работаю в строительной сфере.
                Год назад захотелось сменить род деятельности, вследствие чего решил пройти курсы UI-дизайнера.
                Немного пофрилансил. Сейчас же снова работаю строителем. Из хобби чтение фэнтези-книг и видеоигры.
            </div>
            <div class="wow feedback">Ознакомительный курс был очень интересным.
                После его прохождения начал смотреть обучающие видео по PHP - настолько мне он понравился.
                Вдохновлен на великие свершения.
            </div>
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
    </main>
</body>

</html>