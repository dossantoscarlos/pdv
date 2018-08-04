<?php

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
Route::get('/' , function(){
	return redirect('operador/boasvindas');
});

Route::get('/operador' , function(){
	return redirect('operador/boasvindas');
});

Route::get('/painel' , function(){
	return redirect('/painel/home');
});

Route::get('/config' , function(){
	return redirect()->route('pessoa.createOne');
});

Route::middleware('guest')->prefix('operador')->group(function() {
	Route::get('/boasvindas', 'CoverController@index')->name('cover');
	Route::get('/pdv', 'PdvController@index')->name('pdv');
	Route::get('/consulta', 'ProdutosController@show')->name('show');
	Route::get('/consulta/show', 'ProdutosController@jsonApp');
	Route::get('/consulta/{id}', 'ProdutosController@idModal');
});

Route::middleware('auth')->prefix('painel')->group(function(){
	Route::get('/funcionario', 'FuncionariosController@index')->name('funcionario.index');
	Route::get('/home' , 'HomeController@index')->name('home');

});

Route::middleware('guest')->prefix('config')->group(function (){
	Route::get('/usuario', 'PessoasController@configPessoaOne')->name('pessoa.createOne');
	Route::get('/funcionario[/{id}]','FuncionariosController@configFuncionarioOne')->name('funcionario.createOne');
});

