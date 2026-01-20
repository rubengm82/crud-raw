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
    <table border="1" style='border-collapse: collapse;'>
        <tr>
            <td>Nom</td>
            <td>Descripció</td>
            <td>Data</td>
            <td>Acción</td>
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

    @if(Auth::check())
        <h2>Inscripcions</h2>
        <form action="{{ url()->current() }}" method="get">
            <input type="text" name="nom" placeholder="Cerca per esdeveniment" value="{{ request('nom') }}">
            <input type="text" name="data" placeholder="Cerca per data" value="{{ request('data') }}">
            <input type="submit" value="Filtrar">
        </form>
        @if($inscripcions->count() > 0)
            <table border="1" style='border-collapse: collapse;'>
                <tr>
                    <td>Nom de l’esdeveniment</td>
                    <td>Data de l’esdeveniment</td>
                    <td>Nom de la persona</td>
                    <td>Email de la persona</td>
                    <td>Acció</td>
                </tr>
                @foreach ($inscripcions as $inscripcio)
                    <tr>
                        <td>{{ $inscripcio->esdeveniment->nom }}</td>
                        <td>{{ $inscripcio->esdeveniment->data }}</td>
                        <td>{{ $inscripcio->nom }}</td>
                        <td>{{ $inscripcio->email }}</td>
                        <td>
                            <form action="{{ route('inscripcions.destroy', $inscripcio) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>No hi ha inscripcions!</p>
        @endif
        @if (session('success'))
            <p style="color: green">{{ session('success') }}</p>
        @endif
    @endif
</body>
</html>