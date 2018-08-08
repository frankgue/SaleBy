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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@create'
]);

Route::get('/services', [
    'as' => 'services_path',
    'uses' => 'PagesController@services'
]);

Route::get('/salers', [
    'as' => 'salers_path',
    'uses' => 'SalersController@create'
]);
