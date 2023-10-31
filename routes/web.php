<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|c
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/admin', function () {

    return view('admin.index');
}); */

Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); /* Vista de Cada Post */

Route::get('/pets', [PetController::class, 'index'])->name('pets.index');

Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
Route::post('/pets',[PetController::class,'store'])->name('pets.store');
Route::post('/pets/{pet}',[PetController::class,'update'])->name('pets.update');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
