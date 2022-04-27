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
        return Redirect::to('/login');
    }

    public function show(){
        return view('login');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'nickname' => ['required', Rule::unique('users','nickname')],
            'password' => 'required|min:3|max:30'
        ]);
        //$string = Http::get('http://127.0.0.1:8000/api/name'); // Timeout - Solucão: https://stackoverflow.com/questions/6014958/why-does-file-get-contents-work-with-google-com-but-not-with-my-site/25651196#25651196
        // Utilizando solução abaixo enquanto isso
        $response = Http::get('https://randomuser.me/api/?inc=name');
        $name = json_decode($response,true);
        $string = $name['results'][0]['name']['first'] .' '. $name['results'][0]['name']['last'];

        $formFields['name'] = $string;
        User::create($formFields);
        return redirect('/');
    }
}
