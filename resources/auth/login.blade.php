<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>
    </head>
    <body>
        <h2>INICIAR SESION</h2>
        <form method="POST" action="/login">
            @csrf
            <imput type="email" name="email" placeholder="correo"required>
            <imput type="password" name="password" placeholder="contraseña"required>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>