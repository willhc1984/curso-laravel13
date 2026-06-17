<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    //Listar
    public function index()
    {
        return view('machines.index');
    }
     //Cadastrar 
    public function create()
    {
        return view('machines.create');
    }
     //Listar
    public function store()
    {
        dd('Cadastrar maquinas');
    }
     //Visualizar
    public function show()
    {
        return view('machines.show');
    }
     //Form editar
    public function edit()
    {
        return view('machines.edit');
    }
     //Atualizar
    public function update()
    {
        dd('Atualizar maquinas');
    }

     //Excluir
    public function delete()
    {
        dd('Excluir maquinas');
    }
}
