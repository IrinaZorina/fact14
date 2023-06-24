<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/StylesTest/stylesTest.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $currentHour = date("H");
        if ($currentHour >= 8 && $currentHour < 20) {
            echo '<link rel="stylesheet" href="/StylesTest/stylesDay.css">';
        } else
            echo '<link rel="stylesheet" href="/StylesTest/stylesNight.css">';
    ?>
    <title>Document</title>
</head>

<body>
    <header>
        <section class="headerlogo">
            <img src="images/Mandala.jpg" alt="Логотип">
            <div class="logo"></div>
            <div class="namepage"><strong>Моя страница</strong></div>
        </section>
    </header>
    <main>
        <section class="conteaner">
            <div class="images"></div>
            <div class="name"><strong>Камнев Валентин</strong></div>
            <div class="aboutMe">Всем привет! Меня зовут Валентин, работаю контент менеджером в компании “Торговый дом
                ФАЗА”. Люблю путешествовать, обожаю горы, часто выезжаю на трекинг. Интересуюсь восточной культурой и
                философией, занимаюсь йогой. На данный момент нахожусь в долгом путешествии, Индия, Таиланд, Турция
                сейчас нахожусь в Грузии. После окончания курсов планирую переехать в Москву для работы в офисе нашей
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
    </main>
</body>

</html>