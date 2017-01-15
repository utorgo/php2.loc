<?php
use App\Models\User;

require __DIR__ . '\..\autoload.php';

//$table = \App\Models\User::$table;
$table = \App\Models\User::TABLE;
echo $table . '</br>';
$user = \App\Models\User::findById(2);
var_dump($user);
echo '</br>';
$table = \App\Models\News::TABLE;
echo $table . '</br>';
$article = \App\Models\News::findById(2);
var_dump($article);
echo '</br>';