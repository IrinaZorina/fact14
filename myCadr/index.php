<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css">
    <title>My Card</title>
</head>

<body>
    <style>
        body {
            background-color: <?php include "styles/backgroundColor.php"; ?>
        }

        p,
        .logo,
        .name_text {
            color: <?php include "styles/fontColor.php"; ?>
        }
    </style>
    <header class="header">
        <div class="logo">LOGO</div>
        <div class="nav_bar">
            <a href="#"> Таблица Менделеева</a>
        </div>
    </header>

    <div class="main_container">
        <div class="photo">
            <img src="image/selfie.jpg" alt="my_selfie">
        </div>
        <div class="container1">
            <div class="name">
                <div class="name_text">Кирилл Юрков</div>
            </div>
            <div class="container2">
                <div class="info">
                    <p>Всем привет! Мне 38 лет. Работал в разных сферах. Последние 2 года работаю на производстве
                        и пытаюсь изучать программирование.
                    <p>Никогда не думал, что писать команды машине окажется для меня увлекательным занятием. В процессе самостоятельного
                        обучения понял, что люблю сразу видеть на экране или браузере результат работы своего кода.
                    <p>Люблю путешествовать, жарить шашлык, кататься на самокате! Немного бренчу на гитаре и пою, как хор мартовских котов!
                </div>
                <div class="comment">
                    <p>Курс нравится! Очень понравился опыт разделения на команды! Поначалу показалось, что практики маловато. 
                        Но на деле задания дают такие, что порой приходится часами писать и переписывать код,
                        гуглить инфу!
                    <p>Говорят, что это и есть работа программиста, так как знать всего невозможно, а уметь находить решения задачи надо!
                </div>
            </div>
        </div>
    </div>
    <!-- =========================Картинки на флекс================== -->
    <div class="flex_container">
        <div class="image_block">
            <div class="image">
                <img src="image/Sam_Houston_portrait.jpg" alt="Samuel_Houston" />
            </div>
            <div class="image_text">Samuel Houston</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Main_Street_looking_south_Houston_Texas_(1908).jpg" alt="Main_Street" />
            </div>
            <div class="image_text">Main Street</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Large_Houston_Landsat.jpg" alt="Large_Houston_Landsat" />
            </div>
            <div class="image_text">Large Houston Landsat</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Houston_Ship_Channel.jpg" alt="Houston_Ship_Channel" />
            </div>
            <div class="image_text">Houston Ship Channel</div>
        </div>
    </div>
    <!-- ===================== Картинки на грид================================== -->
    <div class="grid_container">
        <div class="image_block">
            <div class="image">
                <img src="image/Enron_Complex.jpg" alt="Enron_Complex" />
            </div>
            <div class="image_text">Enron Complex</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Discovery_green.jpg" alt="Discovery_green" />
            </div>
            <div class="image_text">Discovery green</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Allen's_Landing_Houston_bayou_view.jpg" alt="Allen's_Landing_Houston_bayou_view" />
            </div>
            <div class="image_text">Allen's Landing Houston bayou view</div>
        </div>

        <div class="image_block">
            <div class="image">
                <img src="image/Aerial_View_of_the_Johnson_Space_Center.jpg" alt="Aerial_View_of_the_Johnson_Space_Center" />
            </div>
            <div class="image_text">Aerial View of the Johnson Space Center</div>
        </div>
    </div>
</body>

</html>