
<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'EasySoat')

@section('content')
<br>
<br>
<br>
<br>
    <div class="registrarse-contenido">
        <h1 class="titulo-registrase">Registrate</h1>
        <p class="inform-registrate">Por favor diligencia este formulario para registrarte</p>
        <form action='/registros' method='post' enctype="multipart/form-data" class="formulario">
            @csrf
            <div class="form-campo">
                <input type="text"  placeholder="Nombres" class="input" id="nombre" name="nombre" />
            </div>
            <div class="form-campo">
                <input type="text" placeholder="Apellidos" class="input" id="apellidos" name="apellidos" />
            </div>
            <div class="form-campo">
                <input type="email" placeholder="email" class="input" id="email" name="email"/>
            </div>
            <div class="form-campo">
                <input type="password" placeholder="Password" class="input" id="password" name="password" />
            </div>

            <div class="form-campo">
                <input type="submit" value="Registrarse" class="boton-registrarse" />
            </div>
        </form>
        <p class="no-registrado">Ya tienes una cuenta?   <li > <a href="/registros/login">Inicia session aqui</a></li></p>
    </div>
@endsection
