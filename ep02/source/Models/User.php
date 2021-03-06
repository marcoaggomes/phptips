<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Models\Address;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name","last_name"]);
    }

    public function addresses()
    {

        return (new Address())->find("user_id = :uid", "uid={$this->id}")->fetch(true);

    }
}
?>