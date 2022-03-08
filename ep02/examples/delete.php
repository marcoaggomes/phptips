<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
//use Source\Models\Address;

/** @var  $user */
$user = (new User())->findById(4);
if($user){
    $user->destroy();
} else {
    echo var_dump($user);
}
// $user->save();


?>