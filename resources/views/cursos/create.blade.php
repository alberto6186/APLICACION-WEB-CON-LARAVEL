@extends('layouts.app')

@section('titulo', 'Crear Curso')

@section('contenido')
    <br>
    <div class="col-md-6 offset-md-3 offset-md-3">
        <h3 class="text-center">Crear un nuevo curso</h3>

        <form action='/cursos' method='post' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nombrecurso" class="form-label">Nombre del Curso</label>
                <input type="texto" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="estadocurso" class="form-label">Estado del Curso</label>
                <input type="texto" class="form-control" id="estado" name="estado">
            </div>
            <div class="mb-3">
                <label for="duracioncurso" class="form-label">Duración del Curso</label>
                <input type="number" class="form-control" id="duracion" name="duracion">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción del Curso</label>
                <input type="texto" class="form-control" id="descripcion" name="descripcion">
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
