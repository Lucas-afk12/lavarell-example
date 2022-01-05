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

Route::view('/' , 'welcome')->name('welcome');
Route::post('/','App\Http\Controllers\WelcomeController@post')->name('welcome.post');
Route::get('/country','App\Http\Controllers\CountryController@index')->name('countrys.index');
Route::get('/country/continent/{continent}' , 'App\Http\Controllers\CountryController@ContinentSearch')->name('countrys.index');
Route::get('/country/pais/{CodPais}' , 'App\Http\Controllers\CountryController@CodeOrder')->name('countrys.index');
Route::get('/city' , 'App\Http\Controllers\paisesController@index')->name('citys.index');
Route::get('/city/{CodPais}' , 'App\Http\Controllers\paisesController@CodeOrder')->name('citys.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
