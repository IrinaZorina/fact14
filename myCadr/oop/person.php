<?php
class Person extends People {
public $surName;
public function __construct($name,$age,$surName)
    {
        parent::__construct($name,$age);
        $this->surName = $surName;
    }
}