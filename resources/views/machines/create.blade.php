@extends('layouts.admin')

@section('content')
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Cadastrar Máquina</h1>

    <x-alert /> 

    <form action="{{ route('machines.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="is_active">Ativo:</label><br>
        <select name="is_active" id="is_active">
            <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Não</option>
        </select><br><br>
        <input type="submit" value="Cadastrar">
</div>

@endsection