@extends('layouts.admin')

@section('content')

<div>
     <a href="{{ route('machines.create')}}">Cadastrar Máquinas</a><hr>
     <h1>Listar Máquinas</h1>
     
   <x-alert />
   
     @forelse ($machines as $machine)
        Nome: <a href="{{ route('machines.show', $machine->id)}}"> {{ $machine->name }} </a><br> 
        Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }} <br>
        <a href="{{ route('machines.show', ['machine' => $machine->id]) }}">Ver detalhes</a> <br>
        <a href="{{ route('machines.edit', ['machine' => $machine->id]) }}">Editar</a><hr>
         
     @empty
         
     @endforelse
</div>

@endsection