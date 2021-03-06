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
Route::get('/', 'AppController@home')->name('home');
Route::get('/project/{hash}', 'AppController@detail')->name('detail');
Route::get('/pricing', 'AppController@pricing')->name('pricing');
Route::get('/about', 'AppController@about')->name('about');
Route::get('/contacts', 'AppController@contacts')->name('contacts');
Route::post('/order', 'AppController@order')->name('order');
