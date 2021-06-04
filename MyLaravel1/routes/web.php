<?php

use App\Http\Controllers\TestController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('home', 'TestController@index')->name('home');
Route::get('match/{id}', 'TestController@show')->name('show-match');
Route::get('create', 'TestController@create')->name('create-match');
Route::post('store', 'TestController@store')->name('store');
Route::get('edit/{id}', 'TestController@edit')->name('edit-match');
Route::post('update/{id}', 'TestController@update')->name('update-match');
Route::get('delete/{id}', 'TestController@delete')->name('delete-match');