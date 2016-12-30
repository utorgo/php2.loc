<?php
    require __DIR__ . '/autoload.php';

    //$table = \App\Models\User::$table;
    $table = \App\Models\User::TABLE;

    echo $table . '</br>';

    $users = \App\Models\User::findAll();

    var_dump($users);

