<?php
use App\Models\User;

require __DIR__ . '\..\autoload.php';

//$table = \App\Models\User::$table;
$table = \App\Models\User::TABLE;

echo $table . '</br>';

$user = \App\Models\User::findById(2);

var_dump($user);