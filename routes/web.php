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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login')->name('login')->uses('App\Http\Controllers\Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login')->name('login.attempt')->uses('App\Http\Controllers\Auth\LoginController@login')->middleware('guest');

// Route::get('/', 'WelcomeController');
Route::get('/', [App\Http\Controllers\WelcomeController::class, '__invoke']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/create', [App\Http\Controllers\ArticleController::class, 'create']);
Route::post('/articles/create', [App\Http\Controllers\ArticleController::class, 'store']);
Route::delete('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('article.destroy');
