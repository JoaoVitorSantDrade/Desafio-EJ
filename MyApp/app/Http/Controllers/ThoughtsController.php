<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class ThoughtsController extends Controller
{
    // Show all thoughts
    public function index(){
        return view('layout-main',[
            'thoughts' => Thought::all()
        ]);
    }

    // Show only one thought
    public function show(Thought $thought){
        return view('components.enterprise-thoughts',[      
            'thought' => $thought
        ]);
    }
}

// Index - Show all
// Show - Show only one
// Create - Show form to create new
// Store - Store new
// Edit - Show form to edit
// Update - Update
// Destroy - Delete