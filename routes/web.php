<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/slide');
});

Route::get('/profile', function () {
    return view('layout/profile');
});

Route::get('/major', function () {
    return view('layout/major');
});

Route::get('/information', function () {
    return view('layout/information');
});

Route::get('/gallery', function () {
    return view('layout/gallery');
});

Route::get('/contact', function () {
    return view('layout/contact');
});
