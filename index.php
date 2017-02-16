<?php

require __DIR__ . '/autoload.php';

$user = new \App\Models\User();
$user->name = 'Vasya';
$user->email = 'v@pupkin.ru';
$user->insert();
//var_dump($users);