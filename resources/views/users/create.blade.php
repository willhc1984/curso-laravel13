@extends('layouts.admin')

@section('content')
<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <h1> Cadastrar Usuário </h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Cadastrar">

    
</div>
@endsection