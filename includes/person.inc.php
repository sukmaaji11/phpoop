<?php
// Next
class Person
{
    //Properties
    //protected $first = "Sukma";
    //private $last = "Aji";
    //private $age = "24";
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    //Construct
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Destruct
    public function __destruct()
    {
    }

    //Methods
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDrinkingAge()
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDrinkingAge)
    {
        self::$drinkingAge = $newDrinkingAge;
    }
}

class Pet extends Person
{
    //Methods
    public function owner()
    {
        // $a = $this->first;
        // return $a;
    }
}
