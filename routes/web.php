<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    Route::get('/admin/works','Admin\WorkController@works')->name('admin.works');
    Route::post('/add_studio','Admin\StudioController@newStudio')->name('add.studio');
    Route::post('/add/','Admin\WorkController@newWork')->name('add');
});
Auth::routes();

