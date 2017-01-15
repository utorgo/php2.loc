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
        if ( NUlL === self::$instance)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }
}