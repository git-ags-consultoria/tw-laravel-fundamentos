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
            <div class="flex items-center justify-between p-6">
                <a class="text-3xl font-bold" href="/">LOGOMARCA</a>
                <ul class="flex space-x-4">
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">

        <div class="flex items-center justify-between p-6">
            <h1 class="text-3xl font-bold text-center my-4">
                Lista de Clientes
            </h1>
            <a href="/clientes/criar"
                class="bg-blue-400 text-white px-4 py-2 rounded-base hover:bg-brand-dark transition-colors duration-200">
                Cadastrar Novo Cliente
            </a>
        </div>


        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Endereço
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Descrição
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                {{ $client->nome }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $client->endereco }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->descricao }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
