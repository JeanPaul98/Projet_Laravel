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

Route::get('/','App\Http\Controllers\boutique\MainController@index')->name('homepage');
Route::get('/produit/{id}','App\Http\Controllers\boutique\MainController@produit')->name('voir_produit');
Route::get('/categories/{id}','App\Http\Controllers\boutique\MainController@viewByCategories')->name('voir_produit_par_cat');
