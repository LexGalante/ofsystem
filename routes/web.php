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

Auth::routes();
//DashBoard
Route::get('/', 'HomeController@index')->name('home');

Route::prefix('ajax')->group(function (){
    Route::get('/endereco/{cep}', 'AjaxController@endereco')->name('ajax.endereco');
    Route::get('/cliente/{q}', 'AjaxController@cliente')->name('ajax.cliente');
});

Route::prefix('user')->group(function (){
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/update', 'UserController@update')->name('user.update');
});

Route::prefix('cliente')->group(function (){
    Route::get('/', 'ClienteController@index')->name('cliente.index')->middleware("role:index,OfSystem\Cliente");
    Route::any('/store', 'ClienteController@store')->name('cliente.store')->middleware("role:store,OfSystem\Cliente");
    Route::any('/report', 'ClienteController@report')->name('cliente.report')->middleware("role:report,OfSystem\Cliente");
    Route::any('/show/{id}', 'ClienteController@show')->name('cliente.show')->middleware("role:show,OfSystem\Cliente");
    Route::any('/update/{id}', 'ClienteController@update')->name('cliente.update')->middleware("role:update,OfSystem\Cliente");
    Route::any('/delete/{id}', 'ClienteController@delete')->name('cliente.delete')->middleware("role:delete,OfSystem\Cliente");
});

Route::prefix('veiculo')->group(function (){
    Route::get('/', 'VeiculoController@index')->name('veiculo.index')->middleware("role:index,OfSystem\Veiculo");
    Route::any('/store', 'VeiculoController@store')->name('veiculo.store')->middleware("role:store,OfSystem\Veiculo");
    Route::any('/report', 'VeiculoController@report')->name('veiculo.report')->middleware("role:report,OfSystem\Veiculo");
    Route::any('/show/{id}', 'VeiculoController@show')->name('veiculo.show')->middleware("role:show,OfSystem\Veiculo");
    Route::any('/update/{id}', 'VeiculoController@update')->name('veiculo.update')->middleware("role:update,OfSystem\Veiculo");
    Route::any('/delete/{id}', 'VeiculoController@delete')->name('veiculo.delete')->middleware("role:delete,OfSystem\Veiculo");
});

Route::prefix('marca')->group(function (){
    Route::get('/', 'MarcaController@index')->name('marca.index')->middleware("role:index,OfSystem\Marca");
    Route::any('/store', 'MarcaController@store')->name('marca.store')->middleware("role:store,OfSystem\Marca");
    Route::any('/report', 'MarcaController@report')->name('marca.report')->middleware("role:report,OfSystem\Marca");
    Route::any('/show/{id}', 'MarcaController@show')->name('marca.show')->middleware("role:show,OfSystem\Marca");
    Route::any('/update/{id}', 'MarcaController@update')->name('marca.update')->middleware("role:update,OfSystem\Marca");
    Route::any('/delete/{id}', 'MarcaController@delete')->name('marca.delete')->middleware("role:delete,OfSystem\Marca");
});

Route::prefix('cor')->group(function (){
    Route::get('/', 'CorController@index')->name('cor.index')->middleware("role:index,OfSystem\Cor");
    Route::any('/store', 'CorController@store')->name('cor.store')->middleware("role:store,OfSystem\Cor");
    Route::any('/report', 'CorController@report')->name('cor.report')->middleware("role:report,OfSystem\Cor");
    Route::any('/show/{id}', 'CorController@show')->name('cor.show')->middleware("role:show,OfSystem\Cor");
    Route::any('/update/{id}', 'CorController@update')->name('cor.update')->middleware("role:update,OfSystem\Cor");
    Route::any('/delete/{id}', 'CorController@delete')->name('cor.delete')->middleware("role:delete,OfSystem\Cor");
});

Route::prefix('funcionario')->group(function (){
    Route::any('/', 'FuncionarioController@index')->name('funcionario.index');
    Route::any('/funcionario', 'FuncionarioController@store')->name('funcionario.store');
    Route::any('/update/{id}', 'FuncionarioController@update')->name('funcionario.update');
    Route::any('/delete/{id}', 'FuncionarioController@delete')->name('funcionario.delete');
});

