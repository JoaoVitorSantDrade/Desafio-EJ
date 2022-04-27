<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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
            'name' => ['required', Rule::unique('users','name')],
            'password' => 'required|min:3|max:30',
            '_token' => ['required', Rule::unique('users','remember_token')]
        ]);
        $formFields['remember_token'] = 'rememberToken()';
        User::create($formFields);
        return redirect('/');
    }
}
