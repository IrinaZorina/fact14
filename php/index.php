<?php require_once '../inc/header.php' ?>

<main>
    <section class="cont">
        <div class="decor foto"></div>
        <div class="decor name">
            <?php
            echo $name ='<p><font size = 5 color = #bc4558 >' . $name_text = 'Сергей Скребков, он же Скреба, он же Сержик' . '</font></p>';
            $gа= substr_count($name, "а");
            $gА= substr_count($name, "А");
            $gя= substr_count($name, "я");
            $gЯ= substr_count($name, "Я");
            $gу= substr_count($name, "у");
            $gУ= substr_count($name, "У");
            $gю= substr_count($name, "ю");
            $gЮ= substr_count($name, "Ю");
            $gо= substr_count($name, "о");
            $gО= substr_count($name, "О");
            $gе= substr_count($name, "е");
            $gЕ= substr_count($name, "Е");
            $gё= substr_count($name, "ё");
            $gЁ= substr_count($name, "Ё");
            $gэ = substr_count($name, "э");
            $gЭ = substr_count($name, "Э");
            $gи = substr_count($name, "и");
            $gИ = substr_count($name, "И");
            $gы = substr_count($name, "ы");
            $gЫ = substr_count($name, "Ы");
            $sum_name = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ; 
            ?>
        </div>
        <div class="decor info" >
            <?php
            $myday = '09.04.1992';
            $inf ='<p>31 год, рожден ' .  $myday . ' (овен по гороскопу).</p>
            <p>Мужчина, традиционной ориентации.</p>
            <p>Рост 162см. Пропорции тела правильные. Стрижен коротко. Родинка на правой щеке. Глаза голубые.</p>
            <p>Образование неоконченное высшее. Профессия: строитель. Зарабатываю честным трудом и спекуляциями.</p>
            <p>Исповедую последовательность, дипломатичность, справедливость. Слегка смурной, но позитивен. Долги не приемлю.</p>';
            $inf1 = substr($inf, 0, 2) . ' style = "color: #bc4558" ' . substr($inf, 2);
            echo $inf1;
            $gа= substr_count($inf, "а");
            $gА= substr_count($inf, "А");
            $gя= substr_count($inf, "я");
            $gЯ= substr_count($inf, "Я");
            $gу= substr_count($inf, "у");
            $gУ= substr_count($inf, "У");
            $gю= substr_count($inf, "ю");
            $gЮ= substr_count($inf, "Ю");
            $gо= substr_count($inf, "о");
            $gО= substr_count($inf, "О");
            $gе= substr_count($inf, "е");
            $gЕ= substr_count($inf, "Е");
            $gё= substr_count($inf, "ё");
            $gЁ= substr_count($inf, "Ё");
            $gэ = substr_count($inf, "э");
            $gЭ = substr_count($inf, "Э");
            $gи = substr_count($inf, "и");
            $gИ = substr_count($inf, "И");
            $gы = substr_count($inf, "ы");
            $gЫ = substr_count($inf, "Ы");
            $sum_inf = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ; 
            ?>
        </div>
        <div class="decor offer">
            <?php
            $offer = '<p>По одному уроку сложно оставить отзыв. Очевидно, что у Регины опыт проведения занятий на
            "имунном" уровне - группу раскачает, а это несомненный плюс, в дополнение к открытости и дружелюбности.</p>';
            function colorOffer(){
                $result ='';
                $arr_offer = explode(' ', $GLOBALS['offer']);
                foreach($arr_offer as $key => $value){
                    if(($key+1) % 2 == 0)  {
                        $value =  ' <span style = "color: #037c87">' . $value . '</span> ';
                    }
                    else{ 
                        $value =  ' <span style = "color: #b67929">' . $value . '</span>';
                    }
                    $result .= $value; 
                }
                return $result;
            }echo colorOffer();
            $gа= substr_count($offer, "а");
            $gА= substr_count($offer, "А");
            $gя= substr_count($offer, "я");
            $gЯ= substr_count($offer, "Я");
            $gу= substr_count($offer, "у");
            $gУ= substr_count($offer, "У");
            $gю= substr_count($offer, "ю");
            $gЮ= substr_count($offer, "Ю");
            $gо= substr_count($offer, "о");
            $gО= substr_count($offer, "О");
            $gе= substr_count($offer, "е");
            $gЕ= substr_count($offer, "Е");
            $gё= substr_count($offer, "ё");
            $gЁ= substr_count($offer, "Ё");
            $gэ = substr_count($offer, "э");
            $gЭ = substr_count($offer, "Э");
            $gи = substr_count($offer, "и");
            $gИ = substr_count($offer, "И");
            $gы = substr_count($offer, "ы");
            $gЫ = substr_count($offer, "Ы");
            $sum_offer = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ;
        $contentText1 = $name_text." ".$inf." ".$offer;     
            ?>
        </div>   
    </section>    
    <section1 class="containers">
        <?php
        $section1_text = 'Мои личные фото';
        $my_image1_text1 = 'Это я';
        $my_image2_text1 = 'Я сплю';
        $my_image3_text1 = 'Я работаю';
        $my_image4_text1 = 'Я учусь'; 
        $section1 = '<div class="head_image decor1">'. $section1_text . '</div>
        <div class="my_image1 decor1"> 
            <table>
                <tr>
                    <td><img src="../images/Iam.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>'. $my_image1_text1 . '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image2 decor1">
            <table>
                <tr>
                    <td><img src="../images/Isleep.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image2_text1 . '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image3 decor1">
            <table>
                <tr>
                    <td><img src="../images/Iwork.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image3_text1 .  '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image4 decor1">
            <table>
                <tr>
                    <td><img src="../images/Istudy.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>'. $my_image4_text1 . '</td>
                </tr>  
            </table>
        </div>';
        $gа= substr_count($section1, "а");
        $gА= substr_count($section1, "А");
        $gя= substr_count($section1, "я");
        $gЯ= substr_count($section1, "Я");
        $gу= substr_count($section1, "у");
        $gУ= substr_count($section1, "У");
        $gю= substr_count($section1, "ю");
        $gЮ= substr_count($section1, "Ю");
        $gо= substr_count($section1, "о");
        $gО= substr_count($section1, "О");
        $gе= substr_count($section1, "е");
        $gЕ= substr_count($section1, "Е");
        $gё= substr_count($section1, "ё");
        $gЁ= substr_count($section1, "Ё");
        $gэ = substr_count($section1, "э");
        $gЭ = substr_count($section1, "Э");
        $gи = substr_count($section1, "и");
        $gИ = substr_count($section1, "И");
        $gы = substr_count($section1, "ы");
        $gЫ = substr_count($section1, "Ы");
        $sum_section1 = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ; 
        echo $section1;
        $contentText2 = $section1_text." ".$my_image1_text1." ".$my_image2_text1." ".$my_image3_text1." ".$my_image4_text1;
        ?>
    </section1>
    <section2 class="containers2">
        <?php 
        $section2_text = 'Мои парные элементы, когда танцую.';
        $my_image1_text2 = 'Левая рука';
        $my_image2_text2 = 'Правая рука';
        $my_image3_text2 = 'Левая нога';
        $my_image4_text2 = 'Правая нога';
        $section2 = '<div class="foo decor1">' . $section2_text . '</div>
        <div class="my_image1 decor1">
            <table>
                <tr>
                    <td><img src="../images/lefthand.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image1_text2 . '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image2 decor1">
            <table>
                <tr>
                    <td><img src="../images/righthand.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image2_text2 . '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image3 decor1">
            <table>
                <tr>
                    <td><img src="../images/leftfoot.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image3_text2 . '</td>
                </tr>  
            </table>
        </div>
        <div class="my_image4 decor1">
            <table>
                <tr>
                    <td><img src="../images/rightfoot.png" width="80%" height="80%" alt=""></td>
                </tr>
                <tr>
                    <td>' . $my_image4_text2 . '</td>
                </tr>  
            </table>
        </div>';
        $gа= substr_count($section2, "а");
        $gА= substr_count($section2, "А");
        $gя= substr_count($section2, "я");
        $gЯ= substr_count($section2, "Я");
        $gу= substr_count($section2, "у");
        $gУ= substr_count($section2, "У");
        $gю= substr_count($section2, "ю");
        $gЮ= substr_count($section2, "Ю");
        $gо= substr_count($section2, "о");
        $gО= substr_count($section2, "О");
        $gе= substr_count($section2, "е");
        $gЕ= substr_count($section2, "Е");
        $gё= substr_count($section2, "ё");
        $gЁ= substr_count($section2, "Ё");
        $gэ = substr_count($section2, "э");
        $gЭ = substr_count($section2, "Э");
        $gи = substr_count($section2, "и");
        $gИ = substr_count($section2, "И");
        $gы = substr_count($section2, "ы");
        $gЫ = substr_count($section2, "Ы");
        $sum_section2 = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ; 
        echo $section2;
        $contentText3 = $section2_text." ".$my_image1_text2." ".$my_image2_text2." ".$my_image3_text2." ".$my_image4_text2;
        ?>
    </section2>
</main>    

<?php require_once '../inc/footer.php' ?>