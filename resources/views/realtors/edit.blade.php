<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Corretor</title>
</head>

<body>
    <main class="w-50 mt-3 container d-flex flex-column justify-content-center align-itens-center">
        <section>
            <h1 class="text-center mb-3">Editar dados do corretor</h1>
            <form action="{{route('realtors.update', $realtor->id)}}" method="post" class="row g-3">
                @csrf
                @method('put')
                <div class="mb-3 col-md-3">
                    <input type="text" name="cpf" placeholder="Digite seu CPF" value="{{$realtor->cpf}}" autofocus class="form-control">
                    @error('cpf')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-9">
                    <input type="text" name="creci" placeholder="Digite seu Creci" value="{{$realtor->creci}}" class="form-control">
                    @error('creci')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <input type="text" name="name" placeholder="Digite seu nome" value="{{$realtor->name}}" class="form-control">
                    @error('name')
                    <div class="mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Salvar</button>
            </form>
        </section>
    </main>
</body>

</html>