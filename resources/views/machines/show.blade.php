<div>
    <a href="{{ route('users.index')}}">Usuários</a>
    <a href="{{ route('machines.index')}}">Máquinas</a><hr>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>Detalhes da Máquina</h1>

    {{-- {{ dd($machine) }} --}}
    ID: {{ $machine->id }} <br>
    Nome: {{ $machine->name }} <br>
    Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }} <br>

</div>
