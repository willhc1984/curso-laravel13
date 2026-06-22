<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use Exception;
use Illuminate\Support\Facades\Log;

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
        try{
            Machine::create([
                'name' => $request->name,
                'is_active' => $request->is_active
            ]);

            return redirect()->route('machines.index')->with('success', 'Maquina cadastrada com sucesso!');
        
            }catch(Exception $e){
                Log::notice('Erro ao cadastrar maquina: ' . $e->getMessage());
                return back()->withInput()->with('error', 'Erro ao cadastrar maquina!');
        }
    }

     //Visualizar
    public function show(Machine $machine)
    {
        return view('machines.show', ['machine' => $machine]);
    }
     //Form editar
    public function edit(Machine $machine)
    {
        return view('machines.edit', ['machine' => $machine]);
    }
     //Atualizar
    public function update(Request $request, Machine $machine)
    {
        try{
            $machine->update([
                'name' => $request->name,
                'is_active' => $request->is_active
            ]);

            return redirect()->route('machines.index')->with('success', 'Maquina atualizada com sucesso!');
        
            }catch(Exception $e){
                Log::notice('Erro ao atualizar maquina: ' . $e->getMessage());
                return back()->withInput()->with('error', 'Erro ao atualizar maquina!');
        }
    }

     //Excluir
    public function delete()
    {
        dd('Excluir maquinas');
    }
}
