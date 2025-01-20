<?php

use Illuminate\Support\Facades\Route;


Route::get('/token/{token}', function($token) {
    return $token;
});

Route::get('/users/{id?}/{name?}', function ($id = null, $name = null) {
    return 'User id: ' . $id . ' - User name: ' . $name;
});



Route::get('/', function () {
    return view('welcome');
});


/*
ANOTAÇÕES

https://laravel.com/docs/11.x/routing#parameters-regular-expression-constraints todos os tipos de validação de parametros do laravel

interrogação no parametro serve para indicar que é opcional
*/