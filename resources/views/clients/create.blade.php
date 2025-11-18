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
                <a class="text-3xl font-bold" href="#">LOGOMARCA</a>
                <ul class="flex space-x-4">
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center my-4">
            Cadastrar novo Cliente
        </h1>


        <form method="post" action="/clientes" class="max-w-6xl mx-auto">
            @csrf
            <div class="mb-5">
                <label for="nome" class="block mb-2.5 text-sm font-medium text-heading">Nome</label>
                <input type="text" id="nome" name="nome"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="Nome do cliente" required />
            </div>

            <div class="mb-5">
                <label for="endereco" class="block mb-2.5 text-sm font-medium text-heading">Endereço</label>
                <input type="text" id="endereco" name="endereco"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="Endereço do cliente" required />
            </div>

            <div class="mb-5">
                <label for="descricao" class="block mb-2.5 text-sm font-medium text-heading">Descrição</label>
                <input type="textarea" id="descricao" name="descricao"
                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="Descrição do cliente" required />
            </div>
            
            <button type="submit"
                class="text-white bg-blue-500 box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Salvar</button>
        </form>

    </div>

</body>

</html>
