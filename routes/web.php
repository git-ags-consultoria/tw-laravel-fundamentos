<?php

use Illuminate\Support\Facades\Route;

/*

## Rota padrão Laravel

Route::get('/', function () {
    return view('welcome');
});

*/

/*

## Aula COnhecendo o conceito de rotas

*/

Route::get('/', function () {
    echo "Estou na home";
});

Route::get('/sobre', function () {
    echo "Estou na página sobre";
});

Route::get('/contato', function () {
    echo "Estou na página de contato";
});


/*

## Trabalhando com parâmetros dinâmicos nas rotas

*/


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
