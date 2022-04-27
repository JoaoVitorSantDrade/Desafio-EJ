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
            'password' => 'required|min:3|max:30',
        ]);

        $name = Http::post('http://127.0.0.1:8000/api/name');
        $formFields['name'] = $name;
        User::create($formFields);
        return redirect('/');
    }
}
