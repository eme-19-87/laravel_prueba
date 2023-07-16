<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

use App\Http\Controllers\Admin\UserController;

Route::get('/admin',[AdminController::class,'index'] );
Route::resource('users', UserController::class)->names('admin.users');
