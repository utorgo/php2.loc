<?php

namespace App;

trait Singleton
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