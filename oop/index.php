<?php

include "Admin/User.php";
include "Mijoz/User.php";
include "Admin/Car.php";

use Admin\User\User as AdminUser;
use Mijoz\User\User as MijozUser;
use Admin\Car\Car;

$admin = new AdminUser();
echo $admin->info();

$user = new MijozUser();
echo $user->info();

$admin1 = new AdminUser();
echo $admin1->info();

$car = new Car();
echo $car->info();