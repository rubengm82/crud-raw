<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Centro</title>
</head>
<body>
    <h1>Crear Centro</h1>
    <form action="{{ route('centros.store') }}" method="post">
        @csrf
        @method('POST')

        <input type="text" name="name" id="name_id" value="{{ old('name') }}">
        <span>Nombre Centro</span>
        <br>
        <br>
        <input type="text" name="address" id="address_id" value="{{ old('address') }}">
        <span>Dirección Centro</span>
        <br>
        <br>
        <input type="submit" value="Crear">
    </form>

    <br><br>
    <a href="{{ url('/') }}">Volver al Menú</a>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

    @if (session('success'))
        <p style="color: green">Centro agreado con exito!</p>
    @endif
</body>
</html>