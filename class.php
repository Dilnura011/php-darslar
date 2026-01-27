<?php 
class Car {
    // Properties - Xususiyat
    public $model;
    public $color;

    // Method - Funksiya 
    public function __construct($model){
        $this->model = $model;
    }
    public function haydash(){
        echo "Mashina harakatlanyapti!";
    }
}

$matiz = new Car( "Matiz");
//$matiz->model = "Matiz";
$matiz->color  = "Oq";
echo $matiz->model."<br>";
$matiz->haydash()."<br>";


class Mahsulotlar {
    private $nomi;
    public $kirim_narxi;
    public $sotuv_narxi;
    public $birligi;

    public function setNomi($nomi){
        $this->nomi = $nomi;
    }
    public function getNomi(){
        return $this->nomi;
    }
    public function __construct($sotuv_narxi){
        $this->sotuv_narxi = $sotuv_narxi;
    }
    public function __destruct(){
        echo "Destructor ishga tushdi";
    }
    public function birliginiKiritish($birligi){
        $this->birligi = $birligi;
    }
    public function birliginiOlish(){
        return $this->birligi;
    }
    public function info(){
        echo "Bu mahsulotlar classi!<br>";
    }
}

$pepsi = new Mahsulotlar(12000);
$pepsi->setNomi("Pepsi");
$pepsi->kirim_narxi = 8000;
$pepsi->birliginiKiritish("dona");
echo $pepsi->getNomi()."<br>";
echo $pepsi->birliginiOlish()."<br>";
//var_dump($pepsi);
//echo "<br>";
//print_r($pepsi);

class Animal {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        return $this->name." ovqatlanyapti!";
    }
}

class Dog extends Animal{
    public function eat(){
        return $this->name." vov vov qilyapdi";
    }
}

$bobik = new Dog()
?>