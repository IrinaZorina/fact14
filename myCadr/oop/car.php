<?php
class Car{
    public $model;
    public $color;
    Public $speed;
    public function __construct($model,$color,$speed){
        $this->model=$model;
        $this->color=$color;
        $this->speed=$speed;
    }

    function getModel(){
        return $this->model;
    }
    function getColor(){
        return $this->color;
    }
    function getspeed(){
        return $this->speed;
    }
}