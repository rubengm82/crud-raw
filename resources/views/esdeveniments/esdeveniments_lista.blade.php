<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Esdeveniments</title>
</head>
<body>
    @if(Auth::check())
        <p>Bienvenido, {{ Auth::user()->name }}</p>
        <form action="/logout" method="post" style="display: inline;">
            @csrf
            <input type="submit" value="Logout">
        </form>
    @else
        <a href="/login">Login</a>
    @endif
    <h2>Esdeveniments</h2>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td>Descripció</td>
            <td>Data</td>
            <td>Acció</td>
        </tr>
        @foreach ($esdeveniments as $esdeveniment)
            <tr>
                <td>{{ $esdeveniment->nom }}</td>
                <td>{{ $esdeveniment->descripcio }}</td>
                <td>{{ $esdeveniment->data }}</td>
                <td><a href="{{ route('inscripcions.create', $esdeveniment) }}">Inscribir</a></td>
            </tr>
        @endforeach
    </table>

    @if(Auth::check() && $inscripcions->count() > 0)
        <h2>Inscripcions</h2>
        <table border="1">
            <tr>
                <td>Nom de l’esdeveniment</td>
                <td>Data de l’esdeveniment</td>
                <td>Nom de la persona</td>
                <td>Email de la persona</td>
            </tr>
            @foreach ($inscripcions as $inscripcio)
                <tr>
                    <td>{{ $inscripcio->esdeveniment->nom }}</td>
                    <td>{{ $inscripcio->esdeveniment->data }}</td>
                    <td>{{ $inscripcio->nom }}</td>
                    <td>{{ $inscripcio->email }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>