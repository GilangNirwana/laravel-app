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

Route::get('/', 'ContohController@welcome');

Route::get('/contact', 'ContohController@contact');

Route::get('/about', 'ContohController@about');

Route::get('/obat', 'ContohController@obat');

Route::get('/vitamin', 'ContohController@vitamin');

