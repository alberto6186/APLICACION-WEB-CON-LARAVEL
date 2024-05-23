@extends('layouts.app')

@section('titulo', 'Crear docente')

@section('contenido')
    <br>
    <div class="col-md-6 offset-md-3 offset-md-3">
        <h3 class="text-center">Ingresa la informacion del docente</h3>
        <form action='/docentes' method='post' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nombredocente" class="form-label">Nombre</label>
                <input type="texto" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="direcciondocente" class="form-label">Dirección</label>
                <input type="texto" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="mb-3">
                <label for="telefonodocente" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3">
                <label for="formacion" class="form-label">Formación</label>
                <input type="texto" class="form-control" id="formacion" name="formacion">
            </div>
            <div class="form-group">
                <label for="imagen">Cargar imagen</label>
                <br>
                <input name="imagen" id="imagen" type="file">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
