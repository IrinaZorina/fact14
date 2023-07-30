<?php
class Animal{
    ///Поля
    public $name;
    public $skin;
    public $color;
///Конструктор
public function __construct($name,$skin,$color){
    $this -> name = $name;
    $this -> skin = $skin;
    $this -> color = $color;
}
    ////Методы
    public function Voice(){
        echo "{$this -> name} Рычит.";
    }
    public function Movement(){
        echo "{$this -> name} Быстро передвигается.";
    }
}
?>