<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/post', 'post')->name('post');

Route::get('/assert-demo', function () {
    return view('assert-demo', [
        'title' => 'Assert teszt oldal',
        'users' => [
            'Anna',
            'Béla',
            'Cecil',
        ],
        'emptyList' => [],
        'message' => 'Sikeres művelet',
    ]);
});
