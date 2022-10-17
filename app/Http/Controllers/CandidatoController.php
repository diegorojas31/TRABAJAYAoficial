<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function create(){ //llama la vista  del registro candidato
        return view('candidato.create');
    }

    public function store (Request $request){ //sube los datos a la bd

        $credentials= Request()->validate([ //valida los datos del usuario
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $candidato=User::create([       //sube los datos
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'direccion' => $data['direccion'],
            'celular' => $data['celular'],
            'tipousers' => $data['tipousers'],
            'profesion' => $data['profesion'],
            'logo' => null,
            'nombre_responsable' => null,
        
        ]);

        return view('home');






    }
}
