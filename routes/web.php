<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{id?}/{name?}', function ($id = null, $name = null) {
    return 'User id: ' . $id . ' name: ' . $name;
});

Route::get('/', function () {
    return view('welcome');
});


/*
ANOTAÇÕES

interrogação no parametro serve para indicar que é opcional
*/