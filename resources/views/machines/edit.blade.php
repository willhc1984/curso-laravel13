
@extends('layouts.admin')

@section('content')

<div>
    <a href="{{ route('users.index')}}">Usuários</a>
    <a href="{{ route('machines.index')}}">Máquinas</a>
    <a href="{{ route('machines.create')}}">Cadastrar Máquinas</a><hr>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <h1>Editar Máquina</h1>
</div>

@endsection