@extends('layouts.admin')

@section('content')

<div>
     <a href="{{ route('machines.create')}}">Cadastrar Máquinas</a><hr>
     <h1>Listar Máquinas</h1>
     
     @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
     @endif

     @forelse ($machines as $machine)
        Nome: <a href="{{ route('machines.show', $machine->id)}}"> {{ $machine->name }} </a><br> 
        Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }} <br>
        <a href="{{ route('machines.show', ['machine' => $machine->id]) }}">Ver detalhes</a> <hr><br>
         
     @empty
         
     @endforelse
</div>

@endsection