<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'EasySoat')

@section('content')
    <<div class="registrarse-contenido">
        <h1 class="titulo-registrase">Ingresa a nuestra App</h1>
        <p class="inform-registrate">Por favor ingresa tu email y password para una compra segura</p>
        <form action='' method='post' enctype="multipart/form-data" class="formulario">
            @csrf

            <div class="form-campo">
                <input type="email" placeholder="Ingresa tu email" class="input" id="email" name="email"/>
            </div>
            <div class="form-campo">
                <input type="password" placeholder="Ingresa tu password" class="input" id="password" name="password" />
            </div>

            <div class="form-campo">
                <input type="submit" value="Ingresa" class="boton-registrarse" />
            </div>
        </form>
        <p class="no-registrado">No tienes una cuenta?   <li > <a href="/registros/create">Registrate aqui</a></li></p>
    </div>
@endsection






