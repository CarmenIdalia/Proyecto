@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')

@section('contenido')
<div class="container"> 
    <div class="row">
        <div class="col">
           <div class="card mt-4">
            <div class="card-body">
                <h2>Registro de Usuario</h2>
                <form action="{{route('registrar')}}" method="post">
                    @csrf
                    @method('POST')
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="name" id="name" class="from-control">
                    <label for="email">Correo</label>
                    <input type="email" class="from-control" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="from-control">
                    <button class="btn btn-primary mt-4">Registrarse</button>
                    <a href="{{route('login')}}" class="btn btn-info mt-4">Logearse</a>
                </form>
            </div>
           </div>
        </div>
    </div>

</div>
@endsection
    
