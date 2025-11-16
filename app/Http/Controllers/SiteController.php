<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{


    /*

    ## Aula Trabalhando com controllers nas rotas

    */

    public function sobre()
    {
        echo "Estou na sobre usando controller";
    }

    /*

    ## Aula criando as primeiras views

    */

    public function home()
    {
        return view('home');
    }

    public function contato()
    {
        return view('contato');
    }
}
