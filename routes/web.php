<?php

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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/email', 'EmailController@create')->name('email.create');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/email', 'HomeController@email')->name('email');

Route::get('/cv', 'HomeController@cv')->name('cv');

Route::resource('blog', 'BlogController');
