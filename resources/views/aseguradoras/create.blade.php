@extends('layouts.app')

@section('titulo', 'Crear docente')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="registrarse-contenido">
        <h1>Registrar una nueva aseguradora</h1>
        <form action='/aseguradoras' method='post' enctype="multipart/form-data" class="formulario">
            @csrf
            <div class="form-campo">
                <input type="text"  placeholder="Nombre aseguradora" class="input" id="nombre" name="nombre" required/>
            </div>
            <div class="form-campo">
                <input type="text" placeholder="Direccion Aseguradora" class="input" id="direccion" name="direccion" required />
            </div>
            <div class="form-campo">
                <input type="number" placeholder="Telefono" class="input" id="telefono" name="telefono" required/>
            </div>
            <div class="form-campo">
                <textarea  placeholder="Informacion de la aseguradora" class="input" id="formacion" name="formacion" required></textarea>
            </div>
            <div class="form-campo">
                <label for="imagen">Cargar imagen</label>
                <input type="file"  class="input" id="imagen" name="imagen" required/>
            </div>

            <br>
            <div class="form-campo">
                <input type="submit" value="Crear Aseguradora" class="boton-registrarse" />
            </div>

        </form>
    </div>
@endsection
