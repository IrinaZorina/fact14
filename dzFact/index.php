<?php require_once "inc/header.php"; ?>


<main>
    <section>
        <div class="container_main">
            <div class="image_im">
                <img class="myImage" src="img/im.jpg" alt="im">
            </div>
            <div class="name">
                <p class="zagolovok"><?php
	                $name='Матвей Смирнов';
	                echo $name;
	                ?></p>
            </div>
            <div class="interests">
	            <p class="text">
	                <?php
	                $hello='Всем привет! У меня много разных увлечений, что все и не перечислить. Работаю госслужащим. Учусь в МГТУ им.Г.И.Носова.';

	                //функция для изменения первой фразы до знака "!" и изменения цвета четных и нечетных слов
	                rabotaText($hello);

	                ?>
	            </p>
            </div>
            <div class="about">
                <p class="text"><?php

                    $otziv='Понравилось как Регина предоставляет материал. Жаль, что из-за работы не получилось присутствовать) С
                    изложенным материалом я уже был примерно знаком. Хотелось бы про JS немного поговорить, но цель курсов
                    другая, поэтому видимо в другой раз поговрим';

                    $birth='23.10.1999';
                    echo $otziv . "<br>" . "Дата рождения: " . $birth;


                    ?></p>
            </div>
        </div>
        <?php

        //количество слов и гласных насайте
        glassFun($name, $hello, $otziv);

        //разница сегодняшнего дня и даты рождения в днях

        raznicaDat($birth);

        ?>
    </section>
</main>

<?php require_once "inc/footer.php"; ?>