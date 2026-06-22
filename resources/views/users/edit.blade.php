@extends('layouts.admin')

@section('content')
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1>Editar Usuário </h1>

    <x-alert />

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <label for="password">Confirmar Senha:</label><br>
        <input type="password" name="password_confirmation"><br><br>
        
        <input type="submit" value="Salvar">
</div>
@endsection
