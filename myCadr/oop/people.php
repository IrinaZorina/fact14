<?php
class People
{
    public $name;
    public $age = 14;
    // Конструктор
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function go()
    {
        echo "go";
    }
    function getAge()
    {
        return $this->age . " <br>";
    }
    function getName()
    {
        return "name: {$this->name} <br>";
    }
}
?>