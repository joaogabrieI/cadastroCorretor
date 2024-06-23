<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Cadastro de Corretores</title>
</head>

<body>
    <main class="w-50 mt-3 container d-flex flex-column justify-content-center align-itens-center">
        <section>
            <h1 class="text-center">Cadastro de Corretor</h1>
            @isset($sucessMessage)
            <div class="alert alert-success">
                {{$sucessMessage}}
            </div>
            @endisset
            <form action="{{route('realtors.store')}}" method="post" class="row g-3">
                @csrf

                <div class="mb-3 col-md-3">
                    <input type="text" name="cpf" placeholder="Digite seu CPF" value="{{old('cpf')}}" autofocus class="form-control">
                    @error('cpf')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-9">
                    <input type="text" name="creci" placeholder="Digite seu Creci" value="{{old('creci')}}" class="form-control">
                    @error('creci')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}" class="form-control">
                    @error('name')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Enviar</button>
            </form>
        </section>

        @if ($realtors->isNotEmpty())
        <section class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Creci</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($realtors as $realtor)
                    <tr>
                        <th scope="row">{{$realtor->id}}</th>
                        <td>{{$realtor->name}}</td>
                        <td>{{$realtor->cpf}}</td>
                        <td>{{$realtor->creci}}</td>
                        <td class="d-flex align-itens-center justify-content-center gap-3">
                            <a href="{{route('realtors.edit', $realtor->id)}}">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </a>
                            <form action="{{route('realtors.destroy', $realtor->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link p-0 border-0">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
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