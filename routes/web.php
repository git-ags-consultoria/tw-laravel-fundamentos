<?php

use App\Http\Controllers\MostrarServicos;
use App\Http\Controllers\SiteController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

/*

## Rota padrão Laravel

Route::get('/', function () {
    return view('welcome');
});

*/

/*

## Aula Conhecendo o conceito de rotas

*/

/*
Route::get('/contato', function () {
    echo "Estou na página de contato";
});
*/

/*

## Aula Trabalhando com parâmetros dinâmicos nas rotas

*/

/*
Route::get('/servico/{id?}', function ($id = null) {

   
    if (!$id) {
        echo "Serviço não informado!";
        return;
    }

    $servicos = [
        1 => 'Detalhes do Serviço de php',
        2 => 'Detalhes do Serviço de html',
        3 => 'Detalhes do Serviço de css'
    ];

    $servico = $servicos[$id] ?? 'Serviço não encontrado!';

    echo $servico;
    
});
*/


/*

## Aula Trabalhando com controllers nas rotas

*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'home']);

//utilizando namespace no topo do arquivo
Route::get('/sobre', [SiteController::class, 'sobre']);


/*

## Aula Single Action Controller --invokable controller

*/

Route::get('/servico/{id?}',  MostrarServicos::class);


/*

## Aula criando as primeiras views

*/
Route::get('/contato', [SiteController::class, 'contato']);


/*

## Aula criando o primeiro model e obtendo dados do banco de dados

*/
Route::get('/clientes', function () {
    var_dump(Client::get());
});
