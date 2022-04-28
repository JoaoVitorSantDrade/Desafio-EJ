<?php

use App\Models\Thought;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ThoughtsController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index - Show all
// Show - Show only one
// Create - Show form to create new
// Store - Store new
// Edit - Show form to edit
// Update - Update
// Destroy - Delete

// Redireciona para a tela de login
Route::get('/', [LoginController::class, 'create'])->name('login');
// Tela Login
Route::get('/entrar', [LoginController::class, 'show'])->middleware('guest');
// Logar
Route::post('/login',[LoginController::class,'login'])->middleware('guest');

// Tela de cadastro 
Route::get('/cadastro',[UserController::class,'create'])->middleware('guest');
// Cadastro -> Logar
Route::post('/usuario',[UserController::class,'store'])->middleware('guest');
// Deslogar
Route::post('/logout', [UserController::class, 'logout']);

// Tela de cadastro de membros
Route::get('/membro',[MemberController::class, 'create'])->middleware('auth');

// Cadastra membro
Route::post('/membro', [MemberController::class,'store'])->middleware('auth');

Route::get('/equipe', [MemberController::class,'index'])->middleware('auth');

Route::get('/principal',[PageController::class,'show'])->name('home')->middleware('auth');


