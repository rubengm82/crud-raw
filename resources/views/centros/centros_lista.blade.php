<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Centros</title>
</head>
<body>
    <h1>Lista de centros</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Dirección</td>
            <td>Acción</td>
        </tr>
        @foreach ($centros as $centro)
            <tr>
                <td>{{ $centro->id }}</td>
                <td>{{ $centro->name }}</td>
                <td>{{ $centro->address }}</td>
                <td>Editar</td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/') }}">Volver al Menú</a>
</body>
</html>