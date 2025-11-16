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

Route::get('/servicos', function () {
    echo "Estou na página de serviços";
});

Route::get('/contato', function () {
    echo "Estou na página de contato";
});
