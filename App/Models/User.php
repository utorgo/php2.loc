<?php

namespace App\Models;

class User extends Model
{
    //public static $table = 'users';
    const TABLE = 'users';

    public $email;

    public $name;

//    public function getName()
//    {
//        return $this->name;
//    }
}