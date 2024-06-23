<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Corretores</title>
</head>

<body>
    <main>
        <section>
            <h1>Cadastro de Corretor</h1>
            @isset($sucessMessage)
            <div>
                {{$sucessMessage}}
            </div>
            @endisset
            <form action="{{route('realtors.store')}}" method="post">
                @csrf
                <input type="text" name="cpf" placeholder="Digite seu CPF">
                <input type="text" name="creci" placeholder="Digite seu Creci">
                <input type="text" name="name" placeholder="Digite seu nome">

                <button>Enviar</button>
            </form>
        </section>
    </main>
</body>

</html>