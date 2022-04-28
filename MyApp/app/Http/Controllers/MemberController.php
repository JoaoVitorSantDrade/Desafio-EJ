<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create(){
        return view('components.layout-main',[
            'page'=>[
                'title' =>   'Novo membro',
                'type'  =>  'new_member'
            ]
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'cargo' => 'required'
        ],
        [
            'name.required' => trans('É necessário um nome'),
            'cargo.required' => trans('Selecione um cargo'),
        ]
        );

        Member::create($formFields);

        return redirect('/principal')->with([
            'message'=>'Membro criado',
            'page' => [
                'type' => 'main',
                'title' => 'Ecomp jr'
            ]
        ]);
    }

    public function index(){
        return view('components.layout-main',[
            'members' => Member::latest()->filter(request(['search']))->get(),
            'page'=>[
                'title' =>   'Membros',
                'type'  =>  'member'
            ]
        ]);
    }
}
