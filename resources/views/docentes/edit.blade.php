
@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')
<br>
<div class="col-md-6 offset-md-3 offset-md-3">
<h3 class="text-center">Editar información del Curso</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/docentes/{{$teacher->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombredocente">Nombre del docente</label>
        <input name="nombre" id="nombredocente" value="{{$teacher->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="direccion">Direccion del docente</label>
        <input name="direccion" id="direccion" value="{{$teacher->direccion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="telefono">Telefono del docente: </label>
        <input name="telefono" id="telefono" value="{{$teacher->telefono}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="formacion">Formacion</label>
        <input name="formacion" id="formacion" value="{{$teacher->formacion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file" >
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
</div>
@endsection
