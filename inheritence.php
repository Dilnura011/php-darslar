<?php
class Animal {
    private $name;
    protected  $zoti;
    public $ogirligi;
    public function __construct ($name, $zoti){
        $this->name = $name;
        $this->zoti = $zoti;
    }

    public function eat(){
        return "Hayvon ovqatlanyapti! <br>";
    }
    public function getName(){
        return $this->name;
    }
}
class Dog extends Animal {
    public function bark(){
        return "Vov vov <br>";
    }
    public function getZoti(){
        return $this->zoti;
    }
}
$dog = new Dog("Bobik", "Pudel");
echo $dog->eat();
echo $dog->bark();
echo $dog->getName()."<br>";
echo $dog->getZoti()."<br>";
var_dump($dog);