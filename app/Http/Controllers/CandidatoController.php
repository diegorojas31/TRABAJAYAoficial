<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class CandidatoController extends Controller
{
    public function create(){ //llama la vista  del registro candidato
        
        return view('users.candidato.create');
    }

    public function tipousuario(){ //llama la vista  de tipos de usuarios
        
        return view('users.tipousuario');
    }

    public function store(Request $request){ //sube los datos a la bd

        $credentials= Request()->validate([ //valida los datos del usuario
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $candidato=User::create([       //sube los datos
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'direccion' => $request['direccion'],
            'celular' => $request['celular'],
            'tipousers' => $request['tipousers'],
            'profesion' => $request['profesion'],
            'logo' => null,
            'nombre_responsable' => null,
        
        ]);

        return view('home');






    }
}
