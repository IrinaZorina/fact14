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
	                $hello='Всем привет! У меня много разных увлечений, что все и не перечислить. Работаю госслужащим. Учусь в МГТУ им.Г.И.Нососва.';
	                $first_text=mb_substr($hello,0,13);
	                $last_text=mb_substr($hello,13);
	                $arr_last=explode(' ',$last_text);
	                echo "<span style='color: azure'>$first_text</span><br>";

	                $b=1;
	                $i=1;
	                //через for тоже работает)))
	                /*for($i=0;$i<count($arr_last);$i++){
	                	$c=$b%2;
	                	if($c==0){
	                		echo "<span style='color: #67f852'>$arr_last[$i]</span> ";
		                }
	                	else{
	                		echo "<span style='color: gold'>$arr_last[$i]</span> ";
		                }
	                	$b++;
	                }*/

	                foreach ($arr_last as $value){

	                	if($i%2==0){
	                		echo "<span style='color: blue'>$value</span> ";
		                }
	                	else{
	                		echo "<span style='color: gold'>$value</span> ";
		                }
	                    $i++;

	                }

	                ?>
	            </p>
            </div>
            <div class="about">
                <p class="text"><?php

                    $otziv='Понравилось как Регина предоставляет материал. Жаль, что из-за работы не получилось присутствовать) С
                    изложенным материалом я уже был примерно знаком. Хотелось бы про JS немного поговорить, но цель курсов
                    другая, поэтому видимо в другой раз поговрим';
                    echo $otziv;

                    ?></p>
            </div>
        </div>
        <?php
        $global_simv="$name " . "$hello " . "$otziv";
        $glas=substr_count($global_simv,'а');
        $glas+=substr_count($global_simv,'у');
        $glas+=substr_count($global_simv,'о');
        $glas+=substr_count($global_simv,'ы');
        $glas+=substr_count($global_simv,'и');
        $glas+=substr_count($global_simv,'э');
        $glas+=substr_count($global_simv,'я');
        $glas+=substr_count($global_simv,'ю');
        $glas+=substr_count($global_simv,'ё');
        $glas+=substr_count($global_simv,'е');
        echo "Количество гласных на сайте: " . "$glas<br>";

        $arr_global=explode(' ',$global_simv);
        $slova=count($arr_global);

        print_r($arr_global);

        echo "<br>Количество слов на сайте: " . "$slova";

        ?>
    </section>
</main>

<?php require_once "inc/footer.php"; ?>