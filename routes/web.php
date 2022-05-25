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
d|s
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('article', 'App\Http\Controllers\ArticleController@show')->name('article');
Route::get('create', 'App\Http\Controllers\ArticleController@create');
Route::get('article/{article}/edit', 'App\Http\Controllers\ArticleController@edit')->name('edit');
Route::delete('/article/{article}','App\Http\Controllers\ArticleController@destroy');
Route::put('/article/{article}', 'App\Http\Controllers\ArticleController@update');
Route::post('create', 'App\Http\Controllers\ArticleController@store');
