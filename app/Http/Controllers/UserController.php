<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar
    public function index()
    {
        dd('Carregar usuarios');
    }
     //Cadastrar 
    public function create()
    {
        dd('Formulario Cadastrar usuarios');
    }
     //Listar
    public function store()
    {
        dd('Cadastrar usuarios');
    }
     //Visualizar
    public function show()
    {
        dd('Exibe usuarios');
    }
     //Form editar
    public function edit()
    {
        dd('Editar usuarios');
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
