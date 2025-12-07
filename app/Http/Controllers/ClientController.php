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

    /*

## Aula criando página de cadastro de clientes

*/
    public function create()
    {
        return view('clients.create');
    }


    /*

    ## Aulas obtendo informações da requesta e salvando no banco de dados e criando o registro no banco de dados

    */
    public function store(Request $request)
    {

        /*

        ## Aulas Validando dados recebidos da request

        */
        $request->validate([
            'nome' => 'required|string|min:5|max:100',
            'endereco' => 'required|string|max:150',
            'descricao' => 'nullable|string',
        ]);


        /*

        ## Aulas usando definição de dados em massa na prática

        */
        Client::create($request->except('_token'));

    /*
        $client = new Client();
        $client->nome = $request->nome;
        $client->endereco = $request->endereco;
        $client->descricao = $request->descricao;
        $client->save();
    */
        return redirect('/clientes');
    }
}
