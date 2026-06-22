
@extends('layouts.admin')

@section('content')

<div>
    <h1>Editar Máquina</h1>

    <x-alert />

    <form action="{{ route('machines.update', ['machine' => $machine->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name', $machine->name) }}"><br><br>
        <label for="is_active">Ativo:</label><br>
        <select name="is_active" id="is_active">
            <option value="1" {{ old('is_active', $machine->is_active) == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ old('is_active', $machine->is_active) == 0 ? 'selected' : '' }}>Não</option>
        </select><br><br>
        <input type="submit" value="Salvar">

</div>

@endsection