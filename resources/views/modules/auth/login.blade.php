@extends('layouts/main')

@section('titulo_pagina', 'Login de usuario')

@section('contenido')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row">
        <div class="col-12">
            <!-- Imagen encima del formulario -->
            <div class="text-center mb-4">
                <img src="images/logo.jpeg" alt="logo" style="width: 150px; height: auto;">

            </div>

            <!-- Tarjeta de Login centrada -->
            <div class="card mt-4" style="width: 24rem; margin: auto;">
                <div class="card-body">
                    <h2 class="text-center">Login de Usuario</h2>
                    <form action="{{route('logear')}}" method="post">
                        @csrf
                        @method('post')

                        <!-- Campo de Email -->
                        <div class="mt-4">
                            <label for="email" class="form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email">
                            </div>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="mt-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="mt-4 d-grid gap-2">
                            <button class="btn btn-danger">Entrar</button>
                            <a href="{{route('registro')}}" class="btn btn-dark">¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
