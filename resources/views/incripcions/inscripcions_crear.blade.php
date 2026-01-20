<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crear Inscripció</title>
</head>
<body>
    <h1>Crear Inscripció</h1>
    <form action="{{ route('inscripcions.store') }}" method="post">
        @csrf
        @method('POST')

        <input type="hidden" name="esdeveniment_id" value="{{ $esdeveniment->id }}">

        <input type="text" name="nom" id="nom_id" value="{{ old('nom') }}">
        <span>Nom</span>
        <br>
        <br>
        <input type="email" name="email" id="email_id" value="{{ old('email') }}">
        <span>Email</span>
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
        <p style="color: green">{{ session('success') }}</p>
    @endif
</body>
</html>