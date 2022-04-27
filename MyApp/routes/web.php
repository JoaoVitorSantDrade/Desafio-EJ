<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ThoughtsController;
use App\Models\Thought;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [LoginController::class, 'create']);
// Tela Login
Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class,'store']);

Route::get('/test', [ThoughtsController::class, 'index']);

Route::get('/test/{thought}', [ThoughtsController::class,'show']);

