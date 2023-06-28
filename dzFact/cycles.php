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

echo "<p class='zad'>количество итераций = $iterations1/p><br>";

//задание2 через цикл for

$num2=1000;

$iterations2=0;

for(;$num2>50;$iterations2++){
	$num2/=2;
}

echo "<p class='zad'>количество итераций = $iterations2</p><br>";

//задание 3

$p=0;
$i=0;

if($i<=10 && $i>=0){
	while($i<11){
	echo "<span class='zad'>$p</span>";
	$p++;
	$i++;
	}
}

else{
	echo "<p class='zad'>Введите другое число!!!</p>";
}


?>




<?php require_once "inc/footer.php"; ?>