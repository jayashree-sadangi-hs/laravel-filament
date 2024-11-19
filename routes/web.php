<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('hello'); // This will now match 'resources/views/hello_world.blade.php'
});
