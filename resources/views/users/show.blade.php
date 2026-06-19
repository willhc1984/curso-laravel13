<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <a href="{{ route('users.index')}}">Usuários</a>
    <a href="{{ route('machines.index')}}">Máquinas</a><hr>
    <h1>Show User </h1>

    Id:: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    E-mail: {{ $user->email }} <br>
</div>
