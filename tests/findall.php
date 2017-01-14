<?php
use App\Models\User;

require __DIR__ . '\..\autoload.php';

//$table = \App\Models\User::$table;
$table = \App\Models\User::TABLE;
echo $table . '</br>';
$users = \App\Models\User::findAll();
var_dump($users);
echo '</br>';
$table = \App\Models\News::TABLE;
echo $table . '</br>';
$news = \App\Models\News::findAll();
var_dump($news);
echo '</br>';

