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

Route::prefix('admin')->group(function () {
    // Пользователи
    Route::get('users','UserController@index')->name('users.index');
    Route::get('users/create','UserController@add')->name('users.add');
    Route::post('users/store','UserController@store')->name('users.store');
    Route::get('users/delete/{id}','UserController@delete')->name('users.delete');
    Route::get('user/{id}','UserController@edit')->name('users.edit');
    Route::post('user/{id}','UserController@update')->name('users.update');
    // Склады
    Route::get('sklads','SkladController@index')->name('sklads.index');
    Route::get('sklads/create','SkladController@add')->name('sklads.add');
    Route::post('sklads/store','SkladController@store')->name('sklads.store');
    Route::get('sklads/delete/{id}','SkladController@delete')->name('sklads.delete');
    Route::get('sklads/{id}','SkladController@edit')->name('sklads.edit');
    Route::post('sklads/{id}','SkladController@update')->name('sklads.update');
    //Контрагенты
    Route::get('client','ClientController@index')->name('clients.index');
    Route::get('client/create','ClientController@add')->name('clients.add');
    Route::post('client/store','ClientController@store')->name('clients.store');
    Route::get('client/delete/{id}','ClientController@delete')->name('clients.delete');
    // Группа товара и товар
    Route::get('grass','GrassController@index')->name('grass.index');
    Route::get('grass/create','GrassController@add')->name('grass.add');


});
