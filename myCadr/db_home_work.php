<?php
// Переменные для подключения
// $hostName = "localhost";
// $userName = "Kirill";
// $password = "123";
// $dbName = "city";
// //Подключение к базе данных
// $connect = mysqli_connect($hostName, $userName, $password);
// mysqli_query($connect,"CREATE DATABASE people");
// echo "База данных создана";
// mysql_select_db($connect,$dbName);
//var_dump($connect);
// Запросы к базе данных
// изменим кодировку
// mysqli_set_charset($connect, 'utf8');
// Запрос в базу данных
// mysqli_query($connect, "SELECT*FROM person");
//Преобразуем данные в ассоциативный массив
// $arr = mysqlI_fetch_all(mysqli_query($connect, "SELECT name FROM person"), MYSQLI_ASSOC);
// $name=array_column($arr,'name');
// foreach ($name as $value) {
// echo $value."";
// }
// Добавляем новое значение таблицу
// $sql= "INSERT INTO person (name,age) VALUES ('Kir',38)";
// if($connect->query($sql)){
// echo "Данные успешно добавлены";
// } else{
// echo "Ошибка: " . $connect->error;
// }
// $connect->close();
// $sql = "INSERT INTO person (name,age) VALUES ('Tom', 37)";
// if(mysqli_query($connect, $sql)){
// echo "Данные успешно добавлены";
// } else{
// echo "Ошибка: " . mysqli_error($connect);
// }
// // mysqli_close($connect);

// Переменные для подключения
$hostName = "localhost";
$userName = "Kirill";
$password = "123";
//Подключение к базе данных
$connect = mysqli_connect($hostName, $userName, $password);
if (!$connect) {
    die("Ошибка подключения к базе данных \n");
} else {
    echo "Подключение упешно выполнено \n";
}
// Создаем базу данных
if (mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS hobbies")) {
    echo "Новая база данных успешно создана \n";
} else {
    echo "Ошибка создания БД \n";
}
//ОБЯЗАТЕЛЬНО!!!!!! Выбираем базу данных
mysqli_select_db($connect, "hobbies");
//========================================Таблица 1=========================================
//-----Создание-----
// $people = "CREATE TABLE IF NOT EXISTS People(id_person INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30),
// surname VARCHAR(30),
// age INT)";
// if (mysqli_query($connect, $people)) {
//     echo "Новая таблица успешно создана \n";
// } else {
//     echo "Ошибка создания таблицы \n";
// }
// //-----Вставка значений----
// $peopleInsert = "INSERT INTO People(name,surname,age) VALUES
// ('Kir','Rik',38),
// ('Bob','Mob',15),
// ('Sam','Ham',25),
// ('Tom','Pom',17),
// ('Ann','Hen',18)";
// if (mysqli_query($connect, $peopleInsert)) {
//     echo "Данные успешно добавлены \n";
// } else {
//     echo "Ошибка добавления данных \n";
// }
// //=========================================Таблица 2========================================
// //-----Создание-----
// $hobbies = "CREATE TABLE IF NOT EXISTS Hobbies(id_hobbies INT AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30),
// description VARCHAR(50))";
// if (mysqli_query($connect, $hobbies)) {
//     echo "Новая таблица успешно создана \n";
// } else {
//     echo "Ошибка создания таблицы \n";
// }
// //-----Вставка значений----
// $hobbiesInsert = "INSERT INTO Hobbies(name,description) VALUES
// ('sleep','sleeping more'),
// ('eat','eatinf more'),
// ('sing','sing loud'),
// ('swim','pool swiming'),
// ('drink','drink vodka')";
// if (mysqli_query($connect, $hobbiesInsert)) {
//     echo "Данные успешно добавлены \n";
// } else {
//     echo "Ошибка добавления данных \n";
// }
//========================================Таблица 3 Связующая==================================
//-----Создание полей-----
$peopleHobbies = "CREATE TABLE IF NOT EXISTS People_hobbies(
    id_record INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_people INT UNSIGNED NOT NULL,
    id_hobbies INT UNSIGNED NOT NULL,
    PRIMARY KEY(id_record),
    FOREIGN KEY(id_people) REFERENCES People(id_person) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(id_hobbies) REFERENCES Hobbies(id_hobbies) ON UPDATE CASCADE ON DELETE RESTRICT)";

if (mysqli_query($connect, $peopleHobbies)) {
    echo "Новая таблица успешно создана \n";
} else {
    echo "Ошибка создания таблицы \n";
}
//-----Вставка значений----
$peopleHobbiesInsert = "INSERT INTO People_hobbies(id_people,id_hobbies) VALUES
 ('2','1'),
 ('2','1'),
 ('2','1'),
 ('3','4'),
 ('4','3'),
 ('5','5')";
if (mysqli_query($connect, $peopleHobbiesInsert)) {
    echo "Связь успешно создана \n";
} else {
    echo "Ошибка создания связи \n";
}
//=============================РЕДАКТИРОВАНИЕ=======================
$updatePeople = "UPDATE People name SET age=39 WHERE name='Kir'";
$updatePeople = "UPDATE People surname SET surname='Ivanov' WHERE id_person=3";
if (mysqli_query($connect, $updatePeople)) {
    echo 'Данные успешно обновлены';
} else {
    echo "Ошибка обновления данных";
}
// ===========================ВЫВОД ДАННЫХ==========================
$select = "SELECT id_person,name,age FROM People";
$res = mysqli_query($connect, $select);
$arr = mysqli_fetch_all($res, MYSQLI_ASSOC);
$id = array_column($arr, 'id_person');
$name = array_column($arr, 'name');
// $age = array_column($arr, 'age'); ВОЗРАСТ ВЫВЕДЕТЬСЯ САМ
foreach ($arr as $id) {
    foreach ($id as $name) {
        echo " " . $name . " ";
    }
    echo "<br>";
}
// ===========================СЛИЯНИЕ ТАБЛИЦ===========================
$join = "SELECT Hobbies.name,description FROM Hobbies JOIN People_hobbies ON Hobbies.id_hobbies=People_hobbies.id_hobbies
 JOIN People ON People_hobbies.id_people=People.id_person WHERE Hobbies.id_hobbies=1";
$res1 = mysqli_query($connect, $join);
$arr = mysqli_fetch_all($res1, MYSQLI_ASSOC);
$id = array_column($arr, 'id_hobbies');
$name = array_column($arr, 'id_person');
foreach ($arr as $id) {
    foreach ($id as $name) {
    }
}
echo " " . $name . " <br>";
?>