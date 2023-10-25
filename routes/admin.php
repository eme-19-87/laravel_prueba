<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VaccineController;
use App\Http\Controllers\Admin\PetTypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AnnouncementController;


Route::resource('', AdminController::class)->only('index');
// Route::resource('tags', TagController::class)->names('admin.tags')->middleware('can:admin');
Route::resource('pets', PetController::class)->names('admin.pets');
Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('users', UserController::class) ->names('admin.users');
Route::resource('image', ImageController::class)->names('admin.image');
// Route::resource('vaccines', VaccineController::class)->names('admin.vaccines')->middleware('can:admin');
Route::resource('pettypes', PetTypeController::class)->names('admin.pettypes');
Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('announcements', AnnouncementController::class)->names('admin.announcements');
