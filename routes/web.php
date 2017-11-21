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
    Route::get('/', 'VeiculoController@index')->name('veiculo.index')->middleware("role:listar,OfSystem\Veiculo");
    Route::get('/create', 'VeiculoController@create')->name('veiculo.create')->middleware("role:criar,OfSystem\Veiculo");
    Route::post('/store', 'VeiculoController@store')->name('veiculo.store')->middleware("role:criar,OfSystem\Veiculo");
    Route::get('/report', 'VeiculoController@report')->name('veiculo.report')->middleware("role:relatorio,OfSystem\Veiculo");
    Route::get('/show/{id}', 'VeiculoController@show')->name('veiculo.show')->middleware("role:visualizar,OfSystem\Veiculo");
    Route::get('/edit/{id}', 'VeiculoController@edit')->name('veiculo.edit')->middleware("role:alterar,OfSystem\Veiculo");
    Route::put('/update/{id}', 'VeiculoController@update')->name('veiculo.update')->middleware("role:alterar,OfSystem\Veiculo");
    Route::get('/delete/{id}', 'VeiculoController@delete')->name('veiculo.delete')->middleware("role:excluir,OfSystem\Veiculo");
});        

Route::prefix('marca')->group(function (){
    Route::get('/', 'MarcaController@index')->name('marca.index')->middleware("role:listar,OfSystem\Marca");
    Route::get('/create', 'MarcaController@create')->name('marca.create')->middleware("role:criar,OfSystem\Marca");
    Route::post('/store', 'MarcaController@store')->name('marca.store')->middleware("role:criar,OfSystem\Marca");
    Route::get('/report', 'MarcaController@report')->name('marca.report')->middleware("role:relatorio,OfSystem\Marca");
    Route::get('/show/{id}', 'MarcaController@show')->name('marca.show')->middleware("role:visualizar,OfSystem\Marca");
    Route::get('/edit/{id}', 'MarcaController@edit')->name('marca.edit')->middleware("role:alterar,OfSystem\Marca");
    Route::put('/update/{id}', 'MarcaController@update')->name('marca.update')->middleware("role:alterar,OfSystem\Marca");
    Route::get('/delete/{id}', 'MarcaController@delete')->name('marca.delete')->middleware("role:excluir,OfSystem\Marca");
});

Route::prefix('cor')->group(function (){
    Route::get('/', 'CorController@index')->name('cor.index')->middleware("role:listar,OfSystem\Cor");
    Route::get('/create', 'CorController@create')->name('cor.create')->middleware("role:criar,OfSystem\Cor");
    Route::post('/store', 'CorController@store')->name('cor.store')->middleware("role:criar,OfSystem\Cor");
    Route::get('/report', 'CorController@report')->name('cor.report')->middleware("role:relatorio,OfSystem\Cor");
    Route::get('/show/{id}', 'CorController@show')->name('cor.show')->middleware("role:visualizar,OfSystem\Cor");
    Route::get('/edit/{id}', 'CorController@edit')->name('cor.edit')->middleware("role:alterar,OfSystem\Cor");
    Route::put('/update/{id}', 'CorController@update')->name('cor.update')->middleware("role:alterar,OfSystem\Cor");
    Route::get('/delete/{id}', 'CorController@delete')->name('cor.delete')->middleware("role:excluir,OfSystem\Cor");
});

Route::prefix('funcionario')->group(function (){
    Route::get('/', 'FuncionarioController@index')->name('funcionario.index')->middleware("role:listar,OfSystem\Funcionario");
    Route::get('/create', 'FuncionarioController@create')->name('funcionario.create')->middleware("role:criar,OfSystem\Funcionario");
    Route::post('/store', 'FuncionarioController@store')->name('funcionario.store')->middleware("role:criar,OfSystem\Funcionario");
    Route::get('/report', 'FuncionarioController@report')->name('funcionario.report')->middleware("role:relatorio,OfSystem\Funcionario");
    Route::get('/show/{id}', 'FuncionarioController@show')->name('funcionario.show')->middleware("role:visualizar,OfSystem\Funcionario");
    Route::get('/edit/{id}', 'FuncionarioController@edit')->name('funcionario.edit')->middleware("role:alterar,OfSystem\Funcionario");
    Route::put('/update/{id}', 'FuncionarioController@update')->name('funcionario.update')->middleware("role:alterar,OfSystem\Funcionario");
    Route::get('/delete/{id}', 'FuncionarioController@delete')->name('funcionario.delete')->middleware("role:excluir,OfSystem\Funcionario");
});

Route::prefix('cargo')->group(function (){
    Route::get('/', 'CargoController@index')->name('cargo.index')->middleware("role:listar,OfSystem\Cargo");
    Route::get('/create', 'CargoController@create')->name('cargo.create')->middleware("role:criar,OfSystem\Cargo");
    Route::post('/store', 'CargoController@store')->name('cargo.store')->middleware("role:criar,OfSystem\Cargo");
    Route::get('/report', 'CargoController@report')->name('cargo.report')->middleware("role:relatorio,OfSystem\Cargo");
    Route::get('/show/{id}', 'CargoController@show')->name('cargo.show')->middleware("role:visualizar,OfSystem\Cargo");
    Route::get('/edit/{id}', 'CargoController@edit')->name('cargo.edit')->middleware("role:alterar,OfSystem\Cargo");
    Route::put('/update/{id}', 'CargoController@update')->name('cargo.update')->middleware("role:alterar,OfSystem\Cargo");
    Route::get('/delete/{id}', 'CargoController@delete')->name('cargo.delete')->middleware("role:excluir,OfSystem\Cargo");
});

