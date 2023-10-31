<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InformationController;

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

Route::get('/admin/major-management', [MajorController::class, 'index']);
Route::get('/admin/add-major', [MajorController::class, 'create']);
Route::post('/admin/store-major', [MajorController::class, 'store']);
Route::get('/admin/edit-major/{id}', [MajorController::class, 'edit']);
Route::put('/admin/major-update/{id}', [MajorController::class, 'update']);
Route::delete('/admin/delete-major/{id}', [MajorController::class, 'delete']);

Route::get('/admin/information-management', [InformationController::class, 'index']);

Route::get('/admin/category-management', [CategoryController::class, 'index']);
Route::get('/admin/add-category', [CategoryController::class, 'create']);
Route::post('/admin/store-category', [CategoryController::class, 'store']);
Route::get('/admin/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('/admin/category-update/{id}', [CategoryController::class, 'update']);
Route::delete('/admin/delete-category/{id}', [CategoryController::class, 'delete']);

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
