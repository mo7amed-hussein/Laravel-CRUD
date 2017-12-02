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

Route::get('/','articleCont@displayHome')->name('home');
Route::get('/read/{id}','articleCont@readArticle')->name('read');
Route::get('/edit/{id}','articleCont@editArticle')->name('edit');
Route::post('/edit/{id}','articleCont@editArticle');

Route::get('/del/{id}','articleCont@delArticle')->name('del');

Route::get('/create','articleCont@createArticle')->name('create');
Route::post('/create','articleCont@createArticle');