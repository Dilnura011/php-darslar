<?php

include "Admin/User.php";
include "Mijoz/User.php";

$admin = new Admin\User\User();
echo $admin->info();

$user = new Mijoz\User\User();
echo $user->info();