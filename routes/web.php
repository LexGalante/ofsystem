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


Route::get('/teste', function () {
    return view('layouts.dash');
});

Auth::routes();
//DashBoard
Route::get('/', 'HomeController@index')->name('home');

Route::prefix('user')->group(function (){
    Route::get('/update', 'UsersController@update')->name('user.update');
});

Route::prefix('cliente')->group(function (){
    Route::get('/', 'ClienteController@index')->name('cliente.index')->middleware("role:index,OfSystem\Cliente");
    Route::get('/store', 'ClienteController@store')->name('cliente.store');
    Route::get('/update/{id}', 'ClienteController@update')->name('cliente.update');
    Route::get('/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');
});

Route::prefix('funcionario')->group(function (){
    Route::get('/', 'FuncionarioController@index')->name('funcionario.index');
    Route::get('/funcionario', 'FuncionarioController@store')->name('funcionario.store');
    Route::get('/funcionario/{id}', 'FuncionarioController@update')->name('funcionario.update');
    Route::get('/funcionario/{id}', 'FuncionarioController@destroy')->name('funcionario.destroy');
});

