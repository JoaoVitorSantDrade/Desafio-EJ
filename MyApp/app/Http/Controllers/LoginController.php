<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    public function create(){
        return Redirect::to('/entrar');
    }

    public function show(){
        return view('login',[
            'page' => [
                'type' => 'login',
                'title' => 'Login'
            ]
        ]);
    }

    public function login(Request $request){
        $formFields = $request->validate([
            'nickname' => ['required', Rule::exists('users','nickname')],
            'password' => 'required'
        ],
        [
            'nickname.exists' => trans('Usuário inexistente'),
            'nickname.required' => trans('É necessário um nome de usuário'),
            'password.required' => trans('É necessário uma senha'),
        ]

        );
        
        $name = User::findOfName($formFields['nickname']);
        $formFields['name'] = $name[0];
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/principal')->with('message','Você está logado');
        }
        return back()->withError(['nickname'=>'Credenciais inválidas'])->onlyInput('nickname');

    }
}
