<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <?php
    $currentTime=date('H');
    $dayTime='8';
    $nightTime='20';
    if($currentTime>$dayTime && $currentTime<$nightTime){
        echo '<link rel="stylesheet" href="styles/style.css">';
    }else{
        echo '<link rel="stylesheet" href="styles/nightStyle.css">';
    }
    ?>
    <title>Mendeleev table</title>
</head>
<body>
<?php
include "header.php";
?>

<img src="image/table.jpg" alt="" />
    <h4>Элементы таблица Менделеева</h4>
    <h4>FLEX</h4>
    <!--В ТАБЛИЦЕ ВСЕГО 2 ВИДА РАСПОЛОЖЕНИЯ КОНТЕЙНЕРОВ В ЯЧЕКЕ. КАК ВОДОРОД И КАК ЖЕЛЕЗО 
    МОЖНО ДОБАВЛЯТЬ НОВЫЕ ЭЛЕМЕНТЫ ИСПОЛЬЗУЯ НУЖНОЕ РАСПОЛОЖЕНИЕ-->
    <div class="mendeleev_flex_container">
      <!-- ================ВОДОРОД========================= -->

      <div class="Hydrogen">
        <div class="container">
          <div class="name1">H</div>
          <div class="atom_num1">1</div>
          <div class="ru_name1">ВОДОРОД</div>
          <div class="mass1">1.006</div>
        </div>
        <div class="container2">
          <ul class="oxid_state">
            <li>1</li>
          </ul>
        </div>
      </div>

      <!-- ===================УГЛЕРОД========================= -->

      <div class="Carboneum">
        <div class="container">
          <div class="name1">C</div>
          <div class="atom_num1">6</div>
          <div class="ru_name1">УГЛЕРОД</div>
          <div class="mass1">12.011</div>
        </div>
        <div class="container2">
          <ul class="oxid_state">
            <li>2</li>
            <li>4</li>
          </ul>
        </div>
      </div>

      <!-- ===================ЖЕЛЕЗО========================= -->

      <div class="Ferrum">
        <div class="container2">
          <ul class="oxid_state">
            <li>2</li>
            <li>14</li>
            <li>8</li>
            <li>2</li>
          </ul>
        </div>
        <div class="container">
          <div class="atom_num2">26</div>
          <div class="name2">Fe</div>
          <div class="ru_name2">ЖЕЛЕЗО</div>
          <div class="mass2">55.849</div>
        </div>
      </div>
      <!-- ===================ЛАНТАН========================= -->

      <div class="Lantan">
        <div class="container2">
          <ul class="oxid_state">
            <li>2</li>
            <li>9</li>
            <li>18</li>
            <li>18</li>
            <li>8</li>
            <li>2</li>
          </ul>
        </div>
        <div class="container">
          <div class="atom_num2">57</div>
          <div class="name2">La</div>
          <div class="ru_name2">ЛАНТАН</div>
          <div class="mass2">138.905</div>
        </div>
      </div>
    </div>
    <h4>GRID</h4>
    <!-- ======================КИСЛОРОД================ -->
    <div class="mendeleev_grid_container">
      <div class="Oxigen">
        <div class="container">
          <div class="name1">O</div>
          <div class="atom_num1">8</div>
          <div class="ru_name1">КИСЛОРОД</div>
          <div class="mass1">15.999</div>
        </div>
        <div class="container2">
          <ul class="oxid_state">
            <li>6</li>
            <li>2</li>
          </ul>
        </div>
      </div>

      <!-- ===================НАТРИЙ====================== -->
      <div class="Sodium">
        <div class="container">
          <div class="name1">Na</div>
          <div class="atom_num1">11</div>
          <div class="ru_name1">НАТРИЙ</div>
          <div class="mass1">22.990</div>
        </div>
        <div class="container2">
          <ul class="oxid_state">
            <li>1</li>
            <li>8</li>
            <li>2</li>
          </ul>
        </div>
      </div>

      <!-- ===================ВОЛЬФРАМ================== -->
      <div class="Tungsten">
        <div class="container2">
          <ul class="oxid_state">
            <li>2</li>
            <li>12</li>
            <li>32</li>
            <li>18</li>
            <li>8</li>
            <li>2</li>
          </ul>
        </div>
        <div class="container">
          <div class="atom_num2">74</div>
          <div class="name2">W</div>
          <div class="ru_name2">ВОЛЬФРАМ</div>
          <div class="mass2">183.85</div>
        </div>
      </div>

      <!-- ==================ТОРИЙ========================= -->
      <div class="Thorium">
        <div class="container2">
          <ul class="oxid_state">
            <li>2</li>
            <li>10</li>
            <li>18</li>
            <li>32</li>
            <li>18</li>
            <li>8</li>
            <li>2</li>
          </ul>
        </div>
        <div class="container">
          <div class="atom_num2">90</div>
          <div class="name2">Th</div>
          <div class="ru_name2">ТОРИЙ</div>
          <div class="mass2">232.038</div>
        </div>
      </div>
    </div>

    <?php
    include "footer.php";
    ?>
</body>
</html>