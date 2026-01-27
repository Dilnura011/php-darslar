<?php

Interface CarInterface {
    public function haydash();
    public function tormizlash();
}

Interface Car2 {
    public function info();
}

class Car implements CarInterface, Car2 {
    public $model;
    public $color;
    public function haydash(){
        return "Mashina harakatlanyapti! <br>";
    }
    public function tormizlash(){
        return "Mashina tormizlandi! <br>";
    }
    public function info(){
        return "Bu Car class! <br>";
    }
}
$onix = new Car();
echo $onix->haydash();
echo $onix->tormizlash();
echo $onix->info();

?>