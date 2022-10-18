<?php
use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpresaController;

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


// TIPO USUARIO
Route::get('/users/tipousuario',[CandidatoController::class,'tipousuario'] )->name('users.tipousuario');
Route::get('/', function () {
    return view('users.tipousuario');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//candidatos
Route::get('/users/candidato/create',[CandidatoController::class,'create'] )->name('users.candidato.create');
Route::post('/users/candidato/store',[CandidatoController::class,'store'] )->name('users.candidato.store');

//empresa
Route::get('/users/empresa/create',[EmpresaController::class,'create'] )->name('users.empresa.create');
Route::post('/users/empresa/store',[EmpresaController::class,'store'] )->name('users.empresa.store');
