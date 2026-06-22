<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body>
        <a href="{{ route('users.index')}}">Usuários</a>
        <a href="{{ route('machines.index')}}">Máquinas</a><hr>
        <a href="{{ route('users.create') }}">Cadastrar usuário</a><br>
        <a href="{{ route('machines.create') }}">Cadastrar maquina</a>
        @yield('content')

    </body>
</html>

