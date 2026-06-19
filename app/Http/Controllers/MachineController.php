<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
    //Listar
    public function index()
    {
        //recuperar registros do banco de dados
        $machines = Machine::orderBy('id', 'desc')->get();
        return view('machines.index', ['machines' => $machines]);
    }

     //Cadastrar 
    public function create()
    {
        return view('machines.create');
    }

     //Listar
    public function store(Request $request)
    {
        Machine::create([
            'name' => $request->name,
            'is_active' => $request->is_active
        ]);

        return redirect()->route('machines.index')->with('success', 'Maquina cadastrada com sucesso!');
    }

     //Visualizar
    public function show(Machine $machine)
    {
        return view('machines.show', ['machine' => $machine]);
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
