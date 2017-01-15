<?php

require __DIR__ . '/autoload.php';

//$singleton = new \App\Singleton(); //Fatal error: Uncaught Error: Class 'App\Singleton' not found in D:\OpenServer\domains\php2.loc\test.php:3

$singleton = \App\Singleton::instance();
$singleton2 = \App\Singleton::instance();
$singleton3 = \App\Singleton::instance();

var_dump($singleton);
var_dump($singleton2);
var_dump($singleton3);