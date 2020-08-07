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

Route::get('/','SiteController@index')->name('site');
Route::get('/contact','SiteController@contact')->name('contact');
Route::get('/studios','SiteController@studios')->name('studios');
Route::get('/studio/{id}','SiteController@studio')->name('studio');
Route::get('/gallery','SiteController@gallery')->name('gallery');
//
Route::middleware(['auth','admin'])->group(function (){
    Route::post('/logout','SignoutController@logout')->name('logout');
    Route::get('/admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/studios','Admin\AdminController@studios')->name('admin.studios');
    Route::get('/admin/studio_works','Admin\AdminController@studioWorks')->name('admin.studio.works');
    Route::post('/add_studio','Admin\StudioController@newStudio')->name('add.studio');
    Route::post('/studio/{studio_id}/works','Admin\StudioWorkController@newWorks')->name('studio.work');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
