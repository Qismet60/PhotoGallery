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

Route::get('/','SiteController@index')->name('index');
Route::get('/index','SiteController@index')->name('index');
Route::get('/contact','SiteController@contact')->name('contact');
Route::get('/studios','SiteController@studios')->name('studios');
Route::get('/studio/{id}','SiteController@studio')->name('studio');
Route::get('/gallery','SiteController@gallery')->name('gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
