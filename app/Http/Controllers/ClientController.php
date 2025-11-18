<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /*

    ## Exibindo as informações de maneira legível

    */

    public function index()
    {
        $clients = Client::all();

       return view('clients.index', [
           'clients' => $clients
       ]);
    }
}
