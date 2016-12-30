<?php
/**
 * Created by PhpStorm.
 * User: upt
 * Date: 30.12.2016
 * Time: 18:39
 */

namespace App\Models;


class User
{
    public $email;

    public $name;

    public static function findAll()
    {
        $db = new \App\Db();

        return $db->query(
            'SELECT * FROM users',
            'App\Models\User'
        );
    }
}