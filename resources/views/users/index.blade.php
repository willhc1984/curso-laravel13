
@extends('layouts.admin')

@section('content')
<div>
    <a href="{{ route('users.create') }}">Cadastrar usuário</a>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1>Listar Usuários</h1>

    <x-alert />

    @forelse ($users as $user)
        Nome: <a href="{{ route('users.show', $user->id) }}"> {{ $user->name }} </a><br>
        E-mail: {{ $user->email }} <hr><br>
    @empty
        <p>Não há usuários cadastrados.</p>
    @endforelse
</div>
@endsection
