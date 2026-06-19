
@extends('layouts.admin')

@section('content')
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>Detalhes da Máquina</h1>

    ID: {{ $machine->id }} <br>
    Nome: {{ $machine->name }} <br>
    Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }} <br>

</div>

@endsection