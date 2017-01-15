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
            return self::$instance = new self;
    }
}