@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('TIPO DE USUARIO') }}</div>

                <div class="card-body">
                 
                            
                               
                            <a href="{{Route('users.candidato.create')}}" class="btn btn-primary">REGISTRAR CANDIDATO</a>
                         
                                <a href="{{Route('users.empresa.create')}}" class="btn btn-primary">REGISTRAR EMPRESA</a>
                




                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
