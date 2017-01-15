<?php


namespace App\Models;


abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new \App\Db();

        return $db->query(
            'SELECT * FROM ' . static::TABLE, //self::TABLE, //self::$table,
            static::class, //self::class //'App\Models\User'
        	[':id' => 1]
        );
    }

    public static function findById($id='1')
    {
        $db = new \App\Db();

        return $db->query(
            "SELECT * FROM " . static::TABLE ." WHERE id=:id", //self::TABLE, //self::$table,
            static::class, //self::class //'App\Models\User'
            [':id' => $id]
        );
    }
}