<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/{id}/update', function ($id) {
        return "Atualizando o usuário de id: {$id}";
    })->name('update');

    Route::get('{id}', function ($id) {
        return "Detalhes do usuário de id: {$id}";
    })->name('show');
});


Route::get('/', function () {
    return view('welcome');
});


/*
ANOTAÇÕES

https://laravel.com/docs/11.x/routing#parameters-regular-expression-constraints todos os tipos de validação de parametros do laravel

interrogação no parametro serve para indicar que é opcional
*/