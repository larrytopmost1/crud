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
|SS
*/

Route::get('/', 'App\Http\Controllers\StudentController@index')->name('home');
Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::post('/create', 'App\Http\Controllers\StudentController@store')->name('store');



//Route::get('/', function () {
  //  return view('welcome');
//});
