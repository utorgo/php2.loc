<?php
/**
 * Created by PhpStorm.
 * User: upt
 * Date: 30.12.2016
 * Time: 18:39
 */

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