<?php
//Методы
class Belka extends Animal{
    public function Tail(){
        echo "{$this -> name} с пушистым хвостом.";
    }
    public function VoiceB(){
        echo "{$this -> name} Пищит.";
    }
}
?>