<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs
     -->
    <a href="{{ route('users.index')}}">Usuários</a>
    <a href="{{ route('machines.index')}}">Máquinas</a><hr>
     <h1>Listar Máquinas</h1>
     {{-- {{ dd($machines) }} --}}

     @forelse ($machines as $machine)
        Nome: <a href="{{ route('machines.show', $machine->id)}}"> {{ $machine->name }} </a><br> 
        Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }} <br>
        <a href="{{ route('machines.show', ['machine' => $machine->id]) }}">Ver detalhes</a> <hr><br>
         
     @empty
         
     @endforelse
</div>
