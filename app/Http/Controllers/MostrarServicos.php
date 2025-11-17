<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarServicos extends Controller
{

    /*

    ## Aula Single Action Controller --invokable controller

    */

    public function __invoke($id = null)
    {
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
        /*

            ## Aula passando dados do controller para a view
            
        */

        return view('servicos', ['servico' => $servico]);
    }
}
