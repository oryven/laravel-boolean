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

// Route::get('/', 'GuestController@home') -> name('home');
// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

Route::get('/postcard/create', 'GuestController@createPostcard') -> name('postcard.create');

Route::post('/postcard/store', 'GuestController@storePostcard') -> name('postcard.store');

Route::get('/api/postcard/list', 'ApiController@getPostcards') -> name('postcard.list');



