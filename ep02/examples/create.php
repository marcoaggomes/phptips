<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user=new User();
$user->first_name="Pedro";
$user->last_name="Leite";
$user->genre="M";
$user->save();
echo var_dump($user);

$addr = new Address();
$addr->add($user,"Nome da Rua","22B");
$addr->save();
echo var_dump($user);

?>