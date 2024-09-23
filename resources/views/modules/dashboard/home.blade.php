@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <!-- Menú lateral -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Título de bienvenida con estilos -->
                <h5 class="text-center py-4" style="font-family: 'Times', sans-serif; font-size: 1.6rem; font-weight: bold;">
                    Rincon del Pato
                </h5>
                <div class="text-center mb-4">
                    <img src="images/logo.jpeg" alt="logo" style="width: 150px; height: auto;">
                    
                </div>

                <!-- Botones para roles y opciones -->
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-dark mb-4">Roles</a>
                    <a href="#" class="btn btn-dark mb-4">Usuarios</a>
                    <a href="#" class="btn btn-dark mb-4">Compras</a>
                    <a href="#" class="btn btn-dark mb-4">Carta</a>
                    <a href="#" class="btn btn-dark mb-4">Pedidos</a>
                    <a href="#" class="btn btn-dark mb-4">Ventas</a>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <!-- Botón de salir en la parte superior derecha -->
            <div class="d-flex justify-content-end pt-3 pb-2 mb-3 border-bottom">
                <a href="{{ route('logout') }}" class="btn btn-danger">Salir del Sistema</a>
            </div>

            <!-- Imagen centrada en el contenido principal -->
            <div class="text-center">
                
                <img src="images/fondo1.jpeg" alt="logo" style="width: 1085px; height: 565px;">
            </div>
        </main>
    </div>
</div>
@endsection