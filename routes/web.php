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

Route::get('/prova','CartorioController@index')->name('prova');

Route::get('/prova/adicionar','CartorioController@adicionar')->name('prova.adicionar');

Route::post('/prova/adicionar','CartorioController@salvar')->name('prova.salvar');

Route::get('/prova/editar/{id}','CartorioController@editar')->name('prova.editar');

Route::put('/prova/atualizar/{id}','CartorioController@atualizar')->name('prova.atualizar');

Route::delete('/prova/deletar/{id}','CartorioController@deletar')->name('prova.deletar');

// Rotas Certidao
Route::get('/prova/certidao','CertidaoController@indexCertidao')->name('prova.certidao');

Route::get('/prova/adicionar/','CertidaoController@adicionarCertidao')->name('prova.adicionarCertidao');

Route::post('/prova/adicionar','CertidaoController@salvarCertidao')->name('prova.salvarCertidao');

Route::get('/prova/editar/{id}','CertidaoController@editarCertidao')->name('prova.editarCertidao');

Route::put('/prova/atualizar/{id}','CertidaoController@atualizarCertidao')->name('prova.atualizarCertidao');

Route::delete('/prova/deletar/{id}','CertidaoController@deletarCertidao')->name('prova.deletarCertidao');
