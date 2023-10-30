<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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


// Route Admin
Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin-major', function () {
    return view('admin/major');
});

Route::get('/admin-information', function () {
    return view('admin/information');
});

Route::get('/admin-photo-gallery', function () {
    return view('admin/photo');
});

Route::get('/admin-video-gallery', function () {
    return view('admin/video');
});

Route::get('/admin-contact-information', function () {
    return view('admin/contact');
});

Route::get('/admin/contact-management', [ContactController::class, 'index']);
Route::get('/admin/add-contact', [ContactController::class, 'create']);
Route::post('/admin/store-contact', [ContactController::class, 'store']);
Route::get('/admin/edit-contact/{id}', [ContactController::class, 'edit']);
Route::put('/admin/contact-update/{id}', [ContactController::class, 'update']);
Route::delete('/admin/delete-contact/{id}', [ContactController::class, 'delete']);

Route::get('/admin/user-management', [UserController::class, 'index']);
Route::get('/admin/add-user', [UserController::class, 'create']);
Route::post('/admin/store-user', [UserController::class, 'store']);
Route::get('/admin/edit-user/{id}', [UserController::class, 'edit']);
Route::put('/admin/user-update/{id}', [UserController::class, 'update']);
Route::delete('/admin/delete-user/{id}', [UserController::class, 'delete']);
