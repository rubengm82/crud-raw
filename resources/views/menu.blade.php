<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App CRUD RAW</title>
</head>
<body>
    <div>
        <h1>Menú</h1>
        <p>Bienvenido, {{ Auth::user()->name }}</p>
        {{-- <p>Bienvenido, {{ auth()->user()->name }}</p> --}}

        <a href="{{ route('centros.index') }}">Listar Centros</a>
        <br>
        <a href="{{ route('centros.create') }}">Crear Centro</a>
        <br><br>
        <form action="/logout" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>
</body>
</html>