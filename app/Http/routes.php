<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('admin_template');
});
Route::get('marca', 'MarcaController@index')->name('marca.index');
Route::get('marca/create', 'MarcaController@create')->name('marca.create');
Route::post('marca/salvar', 'MarcaController@store')->name('marca.store');
Route::get('marca/modelos/{idmarca}', 'MarcaController@modelos')->name('marca.modelos');//Rota alternativa para pegar todos os modelos de uma marca pelo ID da marca
//rotas do AIT
Route::get('ait', 'AitController@index')->name('ait.index');
Route::get('ait/create', 'AitController@create')->name('ait.create');
Route::get('ait/edit/{id}', 'AitController@edit')->name('ait.edit');

Route::get('ait/import', 'AitController@import')->name('ait.import');
Route::post('ait/importFromExcel', 'AitController@importFromExcel')->name('ait.importFromExcel');
Route::post('ait/salvar', 'AitController@store')->name('ait.store');

//rotas do AITR
Route::get('aitr', 'AitrController@index')->name('aitr.index');
Route::get('aitr/create', 'AitrController@create')->name('aitr.create');
Route::post('aitr/salvar', 'AitrController@store')->name('aitr.store');

//rotas do ARR
Route::get('arr', 'ArrController@index')->name('arr.index');
Route::get('arr/create', 'ArrController@create')->name('arr.create');
Route::post('arr/salvar', 'ArrController@store')->name('arr.store');


//rotas de INFRAÇÕES
Route::get('infracoes', 'InfracoesController@index')->name('infracoes.index');
Route::get('infracoes/create', 'InfracoesController@create')->name('infracoes.create');
Route::post('infracoes/salvar', 'InfracoesController@store')->name('infracoes.store');

//rotas de MODELOS
Route::get('modelos', 'ModelosController@index')->name('modelos.index');
Route::get('modelos/create', 'ModelosController@create')->name('modelos.create');
Route::post('modelos/salvar', 'ModelosController@store')->name('modelos.store');

//rotas de VEICULOS
Route::get('veiculos', 'VeiculosController@index')->name('veiculos.index');
Route::get('veiculos/create', 'VeiculosController@create')->name('veiculos.create');
Route::post('veiculos/salvar', 'VeiculosController@store')->name('veiculos.store');