<?php

use Illuminate\Support\Facades\Route;

Route::domain('{user}.localhost')->group(function () {
    Route::get('{$id}', function ($user, $id) {
        return $user . ' - ' . $id;
    });
});

/*
ANOTAÇÕES

https://laravel.com/docs/11.x/routing#parameters-regular-expression-constraints todos os tipos de validação de parametros do laravel

interrogação no parametro serve para indicar que é opcional
*/