<?php require_once 'inc/header.php'; ?>
<main>
    <section class="personal">
        <div class="wow photo"></div>
        <div class="wow name">Руслан Назаров</div>
        <div class="wow about-me">

            <?php

            $about_me = 'Всем привет. Меня зовут Руслан. Мне 30 лет. Я работаю в строительной сфере. Год назад захотелось сменить род деятельности, вследствие чего решил пройти курсы UI-дизайнера. Немного пофрилансил. Сейчас же снова работаю строителем. Из хобби чтение фэнтези-книг и видеоигры.';
            aboutMe($about_me);

            ?>

        </div>
        <div class="wow feedback">

            <?php

            $feedback = 'Ознакомительный курс был очень интересным. После его прохождения начал смотреть обучающие видео по PHP - настолько мне он понравился.';
            feedback($feedback);

            ?>

        </div>
    </section>
    <section class="wow some-text">

        <?php

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

            vowels($page);
            words($page);

            ?>

        </div>
    </section>
</main>
<?php require_once 'inc/footer.php'; ?>