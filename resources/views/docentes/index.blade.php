@extends('layouts.app')

@section('titulo', 'Docentes Creados')

@section('contenido')

    <br>
    <h3 class="text-center">Listado de Docentes</h3>
    <br>
    <br>
    <a href="docentes/create" class="btn btn-success">Crear nuevo Docente</a>
    </br>
    </br>
    <div class="row">
        @foreach ($teacher as $docentico)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($docentico->imagen) }}"
                        class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $docentico->nombre }}</b></h4>
                        <p class="card-text">Direccion: {{ $docentico->direccion }}</p>
                        <p class="card-text">Telefono: {{ $docentico->telefono }}</p>
                        <p class="card-text">Formacion: {{ $docentico->formacion}} </p>
                        <a href="/docentes/{{ $docentico->id }}" class="btn btn-success">Ver detalles</a>
                    </div>
                </div>
                <br></br>

            </div>
        @endforeach
    </div>



@endsection
