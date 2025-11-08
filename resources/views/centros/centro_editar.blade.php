<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Centro</title>
</head>
<body>
    <h1>Editar Centro</h1>
    <form action="{{ route('centros.update', $centro) }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="name_id" value="{{ $centro->name }}">
        <span>Nombre Centro</span>
        <br>
        <br>
        <input type="text" name="address" id="address_id" value="{{ $centro->address }}">
        <span>Dirección Centro</span>
        <br>
        <br>
        <input type="submit" value="Actualizar">
    </form>

    <br><br>
    <a href="{{ route('centros.index') }}">Volver a la lista</a>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

    @if (session('success'))
        <p style="color: green">Centro actualizado con exito!</p>
    @endif
</body>
</html>