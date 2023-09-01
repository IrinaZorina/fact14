<?php
include "people.php";
include "animal.php";
include "person.php";
include "car.php";
include "animals.php";
include "cat.php";
include "dog.php";
include "mouse.php";
include "strings.php";
include "math.php";

// $tom = new People("Tom", 25);
// echo '<pre>';
// var_dump($tom);
// '</pre>';

// $bob = new People("Bob", 20);
// echo '<pre>';
// var_dump($bob);
// '</pre>';
// $tom->go();
// echo "<br>";
// $newAge = $bob->getAge();
// $bobName = $bob->getName();
// echo $bobName;
// echo $newAge;

// $sam = new People("Sam", 13);
// echo '<pre>';
// var_dump($sam);
// '</pre>';
// // Животные
// $cat = new Animal(3, "hghg");
// $dog = new Animal(10, "gfhd");

// $dog->run();
// $dog->eat();
// $dog->sleep();

// $cat->run();
// $cat->eat();
// $cat->sleep();
// //Наследование
// $kir = new Person("Kir", 38, "Yurkov");
// echo '<pre>';
// var_dump($kir);
// '</pre>';
// // =======================ЗАДАЧИ==================
// // Задача 1
// $bmw = new Car('bmw', "black", 200);
// $audi = new Car("audi", "red", 250);
// $vaz = new Car("2109", "Вишневая", 1000);
// $color = $bmw->getColor();
// $model = $audi->getModel();
// $speed = $vaz->getspeed();
// echo $color . "<br>";
// echo $model . "<br>";
// echo $speed . "<br>";
// echo '<pre>';
// var_dump($bmw);
// '</pre>';
// echo '<pre>';
// var_dump($audi);
// '</pre>';
// echo '<pre>';
// var_dump($vaz);
// '</pre>';
// // Задача 2
// $cat = new Cat(2, "black");
// $cat->sayMeow();
// $dog = new Dog(5, 'white');
// $dog->sayGaw();
// $mouse = new Mouse(0.1, "grey");
// $mouse->eatChees();
// echo '<pre>';
// var_dump($cat);
// '</pre>';
// echo '<pre>';
// var_dump($dog);
// '</pre>';
// echo '<pre>';
// var_dump($mouse);
// '</pre>';
// //======================СТРОКИ====================
// $str = new Strings("Привет мир");
// // Замена
// $str1 = $str->mb_str_replace("П", "б", "ПРивет");
// echo "Измененная строка = " . $str1."<br>";
// // Удаление
// $str2 = $str->del_sub_string("При", " ", "Привет Привет Привет");
// echo "Строка с удаленной подстрокой = " . $str2."<br>";
// $str3 = $str->mb_str_replace("При", " ", "Привет Привет Привет");
// echo "Строка с удаленной подстрокой = " . $str3."<br>";

echo Math::get_sum(2,2);
echo $diff=Math::get_diff(4,2);
echo $mult=Math::get_multiplication(2,2);
echo $divis=Math::get_division(2,2);
echo $PI=Math::$pi;
?>