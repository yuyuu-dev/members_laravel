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

Route::get('/', 'App\Http\Controllers\Member\IndexController@index');
Route::get('/members/register', 'App\Http\Controllers\Member\RegisterController@register');
Route::post('/members/register', 'App\Http\Controllers\Member\RegisterController@store');
Route::get('/members/edit/{id}', 'App\Http\Controllers\Member\EditController@edit');
Route::post('/members/save', 'App\Http\Controllers\Member\EditController@save');
Route::delete('/members/destroy', 'App\Http\Controllers\Member\EditController@destroy');
