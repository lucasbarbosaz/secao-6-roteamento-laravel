<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'title' => 'Welcome',
]);
