<?php

namespace App;

class Singleton
{
    protected static $instance;

    protected function __construct()
    {

    }

    public static function instance()
    {
        if ( NUlL === static::$instance)
        {
            static::$instance = new static;
        }
        return static::$instance;
    }
}