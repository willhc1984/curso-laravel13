<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Listar
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('users.index', ['users' => $users]);
    }
     //Cadastrar 
    public function create()
    {
        return view('users.create');
    }
     //Listar
    public function store()
    {
        dd('Cadastrar usuarios');
    }
     //Visualizar
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
     //Form editar
    public function edit()
    {
        return view('users.edit');
    }
     //Atualizar
    public function update()
    {
        dd('Atualizar usuarios');
    }

     //Excluir
    public function delete()
    {
        dd('Excluir usuarios');
    }
}
