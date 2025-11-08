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
        <h1>Menu</h1>

        <a href="{{ route('centros.index') }}">Listar Centros</a>
        <br>
        <a href="{{ route('centros.store') }}">Alta Centro</a>
    </div>
</body>
</html>