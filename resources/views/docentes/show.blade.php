@extends('layouts.app')

@section('titulo', 'Informacion docente')

@section('contenido')

    <div class="col-md-6 offset-md3 offset-md-3">

        <div class="text-center">
            <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($teacher->imagen) }}"
                class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
                <p class="card-text"><b>{{ $teacher->nombre }}</b></p>
                <p class="card-text">Formacion: {{ $teacher->formacion }}</p>
                <p class="card-text">Direccion: {{ $teacher->direccion }}</p>
                <p class="card-text">Telefono: {{ $teacher->telefono }}</p>

            </div>
            <br>
            <a href="/docentes/{{ $teacher->id }}/edit" class="btn btn-warning">Editar docente</a>

        </div>
    </div>

@endsection
