<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class EmpresaController extends Controller
{
    public function create(){ //llama la vista  del registro candidato
        return view('users.empresa.create');
    }

    public function store (Request $request){ //sube los datos a la bd

        $credentials= Request()->validate([ //valida los datos del usuario
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $empresa=User::create([       //sube los datos
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'direccion' => $request['direccion'],
            'celular' => $request['celular'],
            'tipousers' => $request['tipousers'],
            'profesion' => null,
            'logo' => null,
            'nombre_responsable' => $request['nombre_responsable'],
        
        ]);

        return view('home');
}
}