<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar
    public function index()
    {
        return view('users.index');
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
    public function show()
    {
        return view('users.show');
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
