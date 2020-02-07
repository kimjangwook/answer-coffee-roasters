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

Route::get('/', 'PublicPages\\IndexController@index')->name('PublicPages.Index');

Route::prefix('/admin')->group(function () {
    Auth::routes();
    Route::middleware('auth')->group(function () {
        Route::get('/', 'AdminPages\\IndexController@index')->name('AdminPages.Index');
        Route::get('/main-image', 'AdminPages\\MainImageController@index')->name('AdminPages.MainImage');
    });
});


