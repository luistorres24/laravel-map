<?php

use Illuminate\Support\Facades\Auth;
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

//Auth::routes();

//Route::get('/hola', 'MessageController@index');

Route::get('/messages', [App\Http\Controllers\MessageController::class, 'fetch'])->middleware('auth');
Route::post('/messages', [App\Http\Controllers\MessageController::class, 'sentMessage'])->middleware('auth');

Route::get('/', function () {
    return view('chat');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
