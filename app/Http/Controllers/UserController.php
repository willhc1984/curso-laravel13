<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        try{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
        
            }catch(Exception $e){
                Log::notice('Erro ao cadastrar usuário: ' . $e->getMessage());
                return back()->withInput()->with('error', 'Erro ao cadastrar usuário!');
        }
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
