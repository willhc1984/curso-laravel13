
@extends('layouts.admin')

@section('content')
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1>Listar Usuários</h1>

    <x-alert />

    @forelse ($users as $user)
        Nome: <a href="{{ route('users.show', $user->id) }}"> {{ $user->name }} </a><br>
        E-mail: {{ $user->email }} <br>
        <a href="{{ route('users.edit', $user->id) }}">Editar</a><br>
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button><br><br><hr>
        </form>
    @empty
        <p>Não há usuários cadastrados.</p>
    @endforelse

    {{ $users->links() }}
</div>
@endsection
