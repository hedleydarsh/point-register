<?php

use App\Http\Livewire\Register\Register;
use App\Http\Livewire\User\Users;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//rotas de usuários
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/usuarios', Users::class)->name('usuarios');

    Route::middleware(['auth:sanctum', 'verified'])
    ->get('/register', Register::class)->name('registro-de-ponto');
