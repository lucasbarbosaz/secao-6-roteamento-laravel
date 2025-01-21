<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::fallback(function () {
    return view('welcome');
});

/*
ANOTAÇÕES

fallback é uma rota que é chamada quando nenhuma outra rota é encontrada ou seja quando a rota não existe

Route::fallback(function () {
    return view('welcome');
})

https://laravel.com/docs/11.x/routing#parameters-regular-expression-constraints todos os tipos de validação de parametros do laravel

interrogação no parametro serve para indicar que é opcional
*/