<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{


    /*

    ## Aula Trabalhando com controllers nas rotas

    */

    public function home()
    {
        echo "Estou na home usando controller";
    }

    public function sobre()
    {
        echo "Estou na sobre usando controller";
    }
}
