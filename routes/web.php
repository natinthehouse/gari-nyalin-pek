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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createposts', [App\Http\Controllers\PostController::class, 'createposts'])->name('createposts');
Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');
Route::get('/index', [App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::get('/viewupdate{id}', [App\Http\Controllers\PostController::class, 'viewupdate'])->name('viewupdate');
Route::post('/update{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');
Route::get('/delete{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');
