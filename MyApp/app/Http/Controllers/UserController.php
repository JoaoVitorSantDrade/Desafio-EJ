<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function create(){
        return view('login',[
            'page' => [
                'type' => 'new_user',
                'title' => 'Novo usuário'
            ]
        ]);
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name' => ['required'],
            'nickname' => ['required', Rule::unique('users','nickname')],
            'password' => 'required|confirmed|min:6'
        ],
        [
            'name.required' => trans('É necessário um nome'),
            'nickname.unique' => trans('Seu nome de usuário já está em uso'),
            'nickname.required' => trans('É necessário um nome de usuário'),
            'password.required' => trans('É necessário uma senha'),
            'password.confirmed' => trans('Seus campos de senha não coincidem'),
            'password.min' => trans('Sua senha precisa de no mínimo 6 digitos'),
        ]
    );

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['name'] = strtoupper($formFields['name']);
        // Cria usuario
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/principal')->with([
            'message'=>'Usuario criado e logado',
            'page' => [
                'type' => 'main',
                'title' => 'Ecomp jr'
            ]
        ]);
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with([
            'message' => 'Você foi desconectado',
            'page' => [
                'type' => 'login',
                'title' => 'Login'
            ]
        ]);
    }
}
