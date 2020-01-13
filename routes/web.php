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
Route::get('/noticia-3', 'SiteController@noticia3')->name('noticia3');
Route::get('/noticia-4', 'SiteController@noticia4')->name('noticia4');
Route::get('/noticia-5', 'SiteController@noticia5')->name('noticia5');
Route::get('/noticia-6', 'SiteController@noticia6')->name('noticia6');
Route::get('/noticia-7', 'SiteController@noticia7')->name('noticia7');
Route::get('/noticia-8', 'SiteController@noticia8')->name('noticia8');
Route::get('/contato', 'SiteController@contato')->name('contato');
Route::get('/enviar', 'SiteController@enviarDados')->name('enviar');