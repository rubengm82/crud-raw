<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Centro</title>
</head>
<body>
    <h1>Detalle del Centro</h1><br>

    <p><strong>ID: </strong>{{ $centro->id }}</p>
    <p><strong>Nombre del centro: </strong>{{ $centro->name }}</p>
    <p><strong>dirección del centro: </strong>{{ $centro->address }}</p>

    <br><br>
    <a href="{{ route('centros.index') }}">Volver a la lista</a>
</body>
</html>