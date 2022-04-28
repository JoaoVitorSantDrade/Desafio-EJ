<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(){
        return view('components.layout-main',[
            'thoughts' => Thought::all(),
            'page' =>[
                'title' => 'Principal',
                'type' => 'menu'
            ]
        ]);
    }

}
