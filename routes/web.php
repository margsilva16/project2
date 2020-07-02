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





//
//Route::get('/list', ['uses' => 'publicacoesController@index']);
//
//Route::resource('publications', 'publicacoesController');
//
//Route::get('/list', 'publicacoesController@index');
//
//Route::get('/info', 'Controller@index');
Route::get('/password', function() {
        return view('auth.passwords.reset');
});

Route::get('/change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/auth/passwords/reset', 'publicacoesController@index');
//
//Route::delete('/home/{idPublication}', 'publicacoesController@destroy');
//
Route::get('/reset', 'ResetPasswordController@showChangePasswordForm');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//
