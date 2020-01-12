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

Route::get('/', 'SiteController@index')->name('home');
Route::get('/noticia-1', 'SiteController@noticia1')->name('noticia1');
Route::get('/noticia-2', 'SiteController@noticia2')->name('noticia2');
Route::get('/contato', 'SiteController@contato')->name('contato');