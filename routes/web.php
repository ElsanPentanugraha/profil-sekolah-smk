<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\AdminMajorController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\GalleryPhotoController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminInformationController;
use App\Http\Controllers\AdminGalleryPhotoController;


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

Route::get('/', [landingController::class, 'index']);

Route::get('/profile', [ProfilController::class, 'index']);

Route::get('/major', [MajorController::class, 'index']);
Route::get('/major/{id}', [MajorController::class, 'show']);

Route::get('/information', [InformationController::class, 'index']);
Route::get('/detail-post/{id}', [InformationController::class, 'show']);

Route::get('/gallery', [GalleryPhotoController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

// Route Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/major-management', [AdminMajorController::class, 'index']);
Route::get('/admin/detail-major/{id}', [AdminMajorController::class, 'show']);
Route::get('/admin/add-major', [AdminMajorController::class, 'create']);
Route::post('/admin/store-major', [AdminMajorController::class, 'store']);
Route::get('/admin/edit-major/{id}', [AdminMajorController::class, 'edit']);
Route::put('/admin/major-update/{id}', [AdminMajorController::class, 'update']);
Route::delete('/admin/delete-major/{id}', [AdminMajorController::class, 'delete']);

Route::get('/admin/information-management', [AdminInformationController::class, 'index']);
Route::get('/admin/detail-information/{id}', [AdminInformationController::class, 'show']);
Route::get('/admin/add-information', [AdminInformationController::class, 'create']);
Route::post('/admin/store-information', [AdminInformationController::class, 'store']);
Route::get('/admin/edit-information/{id}', [AdminInformationController::class, 'edit']);
Route::put('/admin/information-update/{id}', [AdminInformationController::class, 'update']);
Route::delete('/admin/delete-information/{id}', [AdminInformationController::class, 'delete']);

Route::get('/admin/category-management', [AdminCategoryController::class, 'index']);
Route::get('/admin/add-category', [AdminCategoryController::class, 'create']);
Route::post('/admin/store-category', [AdminCategoryController::class, 'store']);
Route::get('/admin/edit-category/{id}', [AdminCategoryController::class, 'edit']);
Route::put('/admin/category-update/{id}', [AdminCategoryController::class, 'update']);
Route::delete('/admin/delete-category/{id}', [AdminCategoryController::class, 'delete']);

Route::get('/admin/photo-gallery', [AdminGalleryPhotoController::class, 'index']);
Route::get('/add-photos', [AdminGalleryPhotoController::class, 'create']);
Route::post('/upload-images', [AdminGalleryPhotoController::class, 'store']);
Route::delete('/delete-photo/{id}', [AdminGalleryPhotoController::class, 'delete']);

Route::get('/admin-video-gallery', function () {
    return view('admin/video');
});

Route::get('/admin/contact-management', [AdminContactController::class, 'index']);
Route::get('/admin/add-contact', [AdminContactController::class, 'create']);
Route::post('/admin/store-contact', [AdminContactController::class, 'store']);
Route::get('/admin/edit-contact/{id}', [AdminContactController::class, 'edit']);
Route::put('/admin/contact-update/{id}', [AdminContactController::class, 'update']);
Route::delete('/admin/delete-contact/{id}', [AdminContactController::class, 'delete']);

Route::get('/admin/user-management', [UserController::class, 'index']);
Route::get('/admin/add-user', [UserController::class, 'create']);
Route::post('/admin/store-user', [UserController::class, 'store']);
Route::get('/admin/edit-user/{id}', [UserController::class, 'edit']);
Route::put('/admin/user-update/{id}', [UserController::class, 'update']);
Route::delete('/admin/delete-user/{id}', [UserController::class, 'delete']);
