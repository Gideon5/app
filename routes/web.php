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
Route::delete('/article/{article}','App\Http\Controllers\ArticleController@destroy')->name('delete');
Route::put('/article/{article}', 'App\Http\Controllers\ArticleController@update');
Route::post('create', 'App\Http\Controllers\ArticleController@store');

Route::get('cars/home', 'App\Http\Controllers\CarsController@show')->name('home');
Route::get('car_create', 'App\Http\Controllers\CarsController@create');
Route::post('car_create', 'App\Http\Controllers\CarsController@store');
Route::get('car/{car}/edit', 'App\Http\Controllers\CarsController@edit')->name('edit');
Route::put('/cars/home/{car}', 'App\Http\Controllers\CarsController@update');
Route::delete('/cars/home/{car}','App\Http\Controllers\CarsController@destroy')->name('delete');
Route::get('cars/users', 'App\Http\Controllers\CarsController@details')->name('users');


Route::post('add', 'App\Http\Controllers\CartController@store');
Route::get('cart', 'App\Http\Controllers\CartController@show');
Route::delete('/cart/{cart}','App\Http\Controllers\CartController@delete')->name('delete');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

