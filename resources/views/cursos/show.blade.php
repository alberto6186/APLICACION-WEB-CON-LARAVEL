@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
    <div class="col-md-6 offset-md3 offset-md-3">
        <div class="text-center">
            <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($course->imagen) }}"
                class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
                <p class="card-text"><b>{{ $course->nombre }}</b></p>
                <p class="card-text">{{ $course->descripcion }}</p>
                <p class="card-text">Duracion: {{ $course->duracion }} horas</p>
                <p class="card-text">Estado: {{ $course->estado }}</p>
            </div>
            <br>
            <a href="/cursos/{{ $course->id }}/edit" class="btn btn-warning">Editar curso</a>

        </div>
    </div>

@endsection
