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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', 'PublicationController@index');

Route::get('/info', 'InfoPessoalController@index');

Route::post('/publicar', 'PublicationController@store');

Route::delete('/home/{idPublication}', 'PublicationController@destroy');

Route::get('/list/{idPublication}', 'PublicationController@destroy');

Route::get('/change-password', 'UserController@index');

Route::post('change-password', 'UserController@alterarPassword')->name('change.password');

