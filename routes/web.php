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

Route::get('/', 'CupangController@home');

Route::get('/cupangs', 'CupangController@viewCupangs');

Route::get('/edit/{id}', 'CupangController@edit');

Route::post('/store', 'CupangController@store');

Route::patch('/update/{id}', 'CupangController@update');

Route::delete('/delete/{id}', 'CupangController@delete');
