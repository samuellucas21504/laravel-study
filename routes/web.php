<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::prefix('login')->group(function() {
    Route::get('/', [LoginController::class, 'index'])->name('login');

    Route::post('/', [LoginController::class, 'handleLogin'])->name('login.submit');
});

Route::prefix('image')->group(function() {
    Route::get('/{name}', [ImageController::class, 'retrieveImage'])->name('retrieve-image');
    Route::post('/', [ImageController::class, 'uploadImage'])->name('upload-image');
});

Route::prefix('contact')->group(function () {
    Route::get('/',  [ContactController::class, 'index'])
    ->name('contact');

    Route::get('/{id}', function(string $id) {
        return "<h1>Contact id = $id!</h1>";
    })
        ->whereNumber('id')
        ->name('edit-contact');
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts');
    Route::get('/{sluggable}', [PostController::class, 'retrieve'])->name('post');
});



Route::resource('blog', BlogController::class);


