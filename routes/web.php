<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/users', function () {
    $users = [
        [
            'id' => 1,
            'name' => 'tara',
            'age' => 20,
        ],
        [
            'id' => 2,
            'name' => 'Arbian',
            'age' => 17
        ]

    ];

    return view('users.index', compact('users'));
});
