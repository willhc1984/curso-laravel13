<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;

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

    //Cadastrar no  banco de dados
    public function store(UserRequest $request)
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
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    //Atualizar
    public function update(UserRequest $request, User $user)
    {
        try{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
        
            }catch(Exception $e){
                Log::notice('Erro ao atualizar usuário: ' . $e->getMessage());
                return back()->withInput()->with('error', 'Erro ao atualizar usuário!');
        }
    }

     //Excluir
    public function destroy(User $user)
    {
        try{
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso!');
        }catch(Exception $e){
            Log::notice('Erro ao excluir usuário: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Erro ao excluir usuário!');
        }
    }
}
