<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Corretor</title>
</head>

<body>
    <main>
        <section>
            <a href="{{route('realtors.index')}}">Voltar</a>
            <h1>Editar dados do Corretor</h1>
            @isset($sucessMessage)
            <div>
                {{$sucessMessage}}
            </div>
            @endisset
            <form action="{{route('realtors.update', $realtor->id)}}" method="post">
                @csrf
                @method('put')
                <input type="text" name="cpf" placeholder="Digite seu CPF" value="{{old('cpf')}}" value="{{$realtor->cpf}}">
                @error('cpf')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="text" name="creci" placeholder="Digite seu Creci" value="{{old('creci')}}" value="{{$realtor->creci}}">
                @error('creci')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}" value="{{$realtor->name}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button>Salvar</button>
            </form>
        </section>
    </main>
</body>

</html>