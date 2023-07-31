<?php
class Animals{

    public $weight;
    public $color;
    public function __construct($weight,$color){
        $this->weight=$weight;
        $this->color=$color;
    }
    function run(){
        echo "Я люблю побегать <br>";
    }
    function eat(){
        echo "Я люблю поесть <br>";
    }
    function sleep(){
        echo "Я люблю поспать <br>";
    }
}