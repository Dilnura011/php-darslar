<?php

trait LoggerTrait {
    public function log($xabar){
        return "LOGGER: " . $xabar."<br>";
    }
    public function info($class_name){
        return "Bu ".$class_name." classi! <br>";
    }
}

trait Add {
    public function add($a, $b){
        return $a + $b;
    }
}

class User {
    use LoggerTrait, Add;
    public $name;
    public $age;
}
class Admin {
    use LoggerTrait;
    public $name;
    public $age;
}
$user = new User();
$admin = new Admin();

echo $user->log("User yaratildi!");
echo $user->info("User");
echo $admin->log("Admin yaratildi!");