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

// la pagina home contiene due array
Route::get('/', function () {
    $animations =  config('db.animationList');
    $navLinks =  config('db.navLinks');

    return view('/home', compact('animations', 'navLinks') );
})->name('home');

// la pagina comics contiene due array
Route::get('/comics', function () {
    $data = config("comics");
    $navLinks =  config('db.navLinks');
    return view('/comics', compact('data', 'navLinks'));
})->name('comics');

Route::get('/ fans', function () {
    
    $navLinks =  config('db.navLinks');

    return view('/fans', compact( 'navLinks') );
})->name('fans');
