@extends('layouts.app')

@section('titulo', 'Docentes Creados')

@section('content')

    <br>
    <br>
    <br>
    <br>
    <div class="contenido">
        <h1>Informacion de la aseguradora</h1>
        <div class="teacher-info-container">
            <div class="teacher-card text-center">
                <img style="height: 400px; width: 500px; margin: 20px;" src="{{ Storage::url($teacher->imagen) }}" class="card-img-top mx-auto d-block" alt="Imagen del docente">
                <div class="card-body">
                    <p class="card-text"><b>{{ $teacher->nombre }}</b></p>
                    <p class="card-text">Informacion: {{ $teacher->formacion }}</p>
                    <p class="card-text">Dirección: {{ $teacher->direccion }}</p>
                    <p class="card-text">Teléfono: {{ $teacher->telefono }}</p>
                </div>
                <br>
                <a href="/aseguradoras/{{ $teacher->id }}/edit" class="btn btn-warning">Editar aseguradora</a>
            </div>
        </div>
    </div>


@endsection


