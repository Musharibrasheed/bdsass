<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect::route('films.index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return Redirect::route('films.index');
});


Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('genres', App\Http\Controllers\GenresController::class);


Route::resource('films', App\Http\Controllers\FilmsController::class);


Route::get('/film/{slug}', [App\Http\Controllers\FilmsController::class, 'showDetails'])->name('show_details');


Route::get('/logout', function () {
    Auth::logout();
    return Redirect::route('films.index');
});


Route::resource('comments', App\Http\Controllers\CommentsController::class)->middleware('auth');
