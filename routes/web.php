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

Route::get('/', 'ProductController@list');
Route::get('/product', 'ProductController@list');
Route::get('/product/form', 'ProductController@form');
Route::get('/product/detail/{id}', 'ProductController@detail');
Route::get('/product/remove/{id}', 'ProductController@remove');
Route::post('/product/save', 'ProductController@save');
