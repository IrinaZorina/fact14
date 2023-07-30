<?php
include 'DZ.php';
//Поля и конструктор
    class Turtle extends Animal{
        public $guard = 'armor';
        public function __construct($name,$skin,$color,$guard){
            // $this -> name = $name;
            // $this -> skin = $skin;
            // $this -> color = $color;
            $this -> guard = $guard;
        }
        public function MovementT(){
            echo "{$this -> name} Медленно передвигается.";
        }
    }
?>