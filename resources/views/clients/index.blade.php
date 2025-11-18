<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <nav class="bg-gray-200">
        <div class="container mx-auto">
            <div class="flex items-center justify-between p-6" >
                <a class="text-3xl font-bold" href="#">LOGOMARCA</a>
                <ul class="flex space-x-4">
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-3xl font-bold underline bg-gray-400">
        Cadastro de Clientes
    </h1>

    @foreach ($clients as $client)
        <div class="client-card">
            <h2>{{ $client->nome }}</h2>
            <p>Endereço: {{ $client->endereco }}</p>
            <p>Descrição: {{ $client->descricao }}</p>
        </div>
    @endforeach
</body>

</html>
