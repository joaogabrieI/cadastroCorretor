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
                @error('cpf')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="text" name="creci" placeholder="Digite seu Creci">
                @error('creci')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="text" name="name" placeholder="Digite seu nome">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button>Enviar</button>
            </form>
        </section>

        @if ($realtors->isNotEmpty())
        <section>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Creci</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($realtors as $realtor)
                    <tr>
                        <td>{{$realtor->id}}</td>
                        <td>{{$realtor->name}}</td>
                        <td>{{$realtor->cpf}}</td>
                        <td>{{$realtor->creci}}</td>
                        <td>
                            <form action="{{route('realtors.destroy', $realtor->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="#">Editar</a>
                                <button>Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        @endif
    </main>
</body>

</html>