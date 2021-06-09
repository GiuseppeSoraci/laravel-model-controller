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

// Home
Route::get('/', 'PageController@index')->name('home');

// Libri
Route::get('/movies', 'MovieController@index')->name('movies');

// Contatti
Route::get('/contatti', 'PageController@contacts')->name('contacts');

