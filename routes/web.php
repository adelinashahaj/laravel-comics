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
    $animations = config('db.animationList');

    return view('home',compact('animations') );
})->name('home');

// la pagina comics contiene un array
Route::get('/comics', function () {
    $data = config("comics");
    return view('comics', compact("data"));
})->name('comics');

Route::view('/fans', 'fans')->name('fans');
