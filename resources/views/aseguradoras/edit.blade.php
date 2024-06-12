
@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('content')
<br>
<br>
<br>
<div class="col-md-6 offset-md-3 offset-md-3">
<h1 class="text-center">Editar información de la aseguradora</h1>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/aseguradoras/{{$teacher->id}}" method="POST" enctype="multipart/form-data" class="formulario">
    @method('PUT')
    @csrf
    <br>
    <div class="mb-3">
        <label class="label" for="direccion">Nombre de la aseguradora</label>
        <br>
        <input name="nombre" id="nombre" value="{{$teacher->nombre}}" type="text" class="input">
    </div>
    <br>
    <div class="mb-3">
        <label class="label" for="direccion">Direccion de la aseguradora</label>
        <br>
        <input name="direccion" id="direccion" value="{{$teacher->direccion}}" type="text" class="input">
    </div>
    <br>
    <div class="mb-3">
        <label class="label" for="telefono">Telefono de la aseguradora: </label>
        <br>
        <input name="telefono" id="telefono" value="{{$teacher->telefono}}" type="text" class="input">
    </div>
    <br>
    <div class="mb-3">
        <label class="label" for="formacion">Informacion de la aseguradora</label>
        <br>
        <input name="formacion" id="formacion" value="{{$teacher->formacion}}" type="text" class="input">
    </div>
    <br>

    <div class="mb-3">
        <label for="imagen">Imagen:</label>
        <input name="imagen" id="imagen" type="file" class="input">
    </div>

    <br>
    <div class="form-campo">
        <input type="submit" value="Editar Aseguradora" class="boton-registrarse" />
    </div>
</form>
</div>
@endsection
