<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
//use Source\Models\Address;

/** @var  $user */
$user = (new User())->findById(5);
$user->first_name = "Lucas";
$user->save();
echo var_dump($user);

?>