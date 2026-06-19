<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs
     -->
     <h1>Listar Máquinas</h1>
     {{-- {{ dd($machines) }} --}}

     @forelse ($machines as $machine)
        <div>
            <h2>Nome: {{ $machine->name }} Ativo: {{ $machine->is_active ? 'Ativa' : 'Inativa' }}
        </div>
         
     @empty
         
     @endforelse
</div>
