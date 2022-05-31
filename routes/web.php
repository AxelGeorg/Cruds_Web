<?php

use App\Http\Controllers\AlocacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DesenvolvedorController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ProjetosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('/clientes'       , ClienteController      ::class);
Route::resource('/enderecos'      , EnderecoController     ::class);
Route::resource('/desenvolvedores', DesenvolvedorController::class);
Route::resource('/projetos'       , ProjetosController     ::class);
Route::resource('/alocacaos'      , AlocacaoController     ::class);