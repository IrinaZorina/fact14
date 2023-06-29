<?php require_once "inc/header.php";?>


<?php
//задания 1,2,4 были выполнены на занятии слайд 23
//задание 3 23 слайд (не получается)


/*$pi = 0.0;
$a = 1.0;
$iterations = 0;
$sign = 1;
$b = 3;
$i = 1.0;

do{
	$sign *= -1;
    $a = $a + $sign * (1 / $b);

    $iterations++;
    $b += 2;
    $i=$a%0.01;
}
while($a > 0.01);

$pi = 4 * $a;

echo "Number of iterations: " . $iterations . "<br>";
echo "Pi value: " . $pi . "<br>";*/

//задание2 через цикл while

$num1=1000;

$a=0;

$iterations1=0;

while($num1>50){

	$num1/=2;
	$iterations1++;
}

echo "<p class='zad'>Задача 2 (цикл While)<br>количество итераций = $iterations1</p><br>";

//задание2 через цикл for

$num2=1000;

$iterations2=0;

for(;$num2>50;$iterations2++){
	$num2/=2;
}

echo "<p class='zad'>Задача 2 (цикл For)<br>кколичество итераций = $iterations2</p><br>";

//задание 3

$p=0;
$i=0;

echo "<p class='zad'>Задача 3<br></p>";

if($i<=10 && $i>=0){
	while($i<11){
	echo "<span class='zad'>$p</span>";
	$p++;
	$i++;
	}
}

else{
	echo "<p class='zad'>Введите другое число!!!</p><br>";
}

//доп задача 1

$chis1=1;
$znam1=1;
$otv1=0;
$zak_chis=1;
$iterations3=0;

do{
	$otv1+=$chis1/$znam1;
	$zak_chis+=2;
	$chis1+=$zak_chis;
	$znam1*=2;
	$iterations3++;
}
while($otv1<10);

echo "<p class='zad'>Доп задача 1<br>количество итераций = $iterations3</p><br>";

//Доп задача 2

$chis2=1;
$znam2=1;
$otv2=0;

$iterations4=0;

do{
	$otv2+=$chis2/$znam2;

	$chis2+=2;
	$znam2+=1;
	$iterations4++;
}
while($otv2<10);

echo "<p class='zad'>Доп задача 2<br>количество итераций = $iterations4</p><br>";

//Доп задача 3

$chis3=1;
$znam3=1;
$otv3=0;

$iterations5=0;

do{
	$otv3+=$chis3/$znam3;

	$chis3+=2;
	$znam3+=2;
	$iterations5++;
}
while($otv3<10);

echo "<p class='zad'>Доп задача 3<br>количество итераций = $iterations5</p><br>";

?>




<?php require_once "inc/footer.php"; ?>