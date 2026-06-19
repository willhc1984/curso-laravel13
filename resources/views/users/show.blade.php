
@extends('layouts.admin')

@section('content')

<div>
    <h1>Show User </h1>

    Id:: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    E-mail: {{ $user->email }} <br>
</div>

@endsection