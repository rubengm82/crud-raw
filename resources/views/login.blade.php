<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App CRUD RAW</title>
</head>
<body>
    <div>
        <h1>Login</h1>

        <form action="." method="post">
            @csrf
            <input type="email" name="email" id="email_id" value="{{ old('email') }}">
            <span>Email</span>
             <br>
            <br>
            <input type="password" name="password" id="password_id" value="{{ old('password') }}">
            <span>Password</span>
            <br>
            <br>
            <input type="submit" value="Entrar">
        </form>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        @endif
    </div>
</body>
</html>