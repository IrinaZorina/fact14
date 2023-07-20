<?php require_once 'inc/header.php'?>
<main>
<br>
    <section class="conteaner">
        <div class="images"></div>
        <div class="name"><strong>Камнев Валентин</strong></div>
        <div class="aboutMe">
            <?php
            $aboutMy = 'Всем привет. Меня зовут Валентин. Работаю контент менеджером в компании “Торговый дом
            ФАЗА”. Люблю путешествовать, обожаю горы, часто выезжаю на трекинг. Интересуюсь восточной культурой и
            философией, занимаюсь йогой. После окончания курсов планирую переехать в Москву для работы в офисе нашей
            компании программистом.';
            color_about_me($aboutMy);
            ?>
            </div>
        <div class="myOpinion">
            <?php 
            $myOpinion = 'Мнение о курсе сложно составить по одному уроку, на данный момент могу отметить
            небольшое количество учащихся, что позволит проработать индивидуально ошибки. Так же понравился формат
            обучения и внимательность преподавателя к каждому человеку, заставляет включаться активнее в процесс.';
            color_myOpinion($myOpinion);
            ?>
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
<?php require_once 'inc/footer.php' ?>