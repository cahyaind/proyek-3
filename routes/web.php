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
    return view('home');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::get('/pemilik', 'App\Http\Controllers\PemilikController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

	Route::get('/data_ayam', 'App\Http\Controllers\DataAyamController@index');
    Route::post('/data_ayam/create', 'App\Http\Controllers\DataAyamController@create');
    Route::get('/data_ayam/{id}/edit', 'App\Http\Controllers\DataAyamController@edit');
    Route::post('/data_ayam/{id}/update', 'App\Http\Controllers\DataAyamController@update');
    Route::get('/data_ayam/{id}/hapus', 'App\Http\Controllers\DataAyamController@hapus');

    Route::get('/data_pakan', 'App\Http\Controllers\DataPakanController@index');
    Route::post('/data_pakan/create', 'App\Http\Controllers\DataPakanController@create');
    Route::get('/data_pakan/{id}/edit', 'App\Http\Controllers\DataPakanController@edit');
    Route::post('/data_pakan/{id}/update', 'App\Http\Controllers\DataPakanController@update');
    Route::get('/data_pakan/{id}/hapus', 'App\Http\Controllers\DataPakanController@hapus');
});

