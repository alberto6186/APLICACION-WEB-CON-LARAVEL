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
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$docentico->nombre}}</h4>
                  <p class="card-text">Dir: <b>{{$docentico->direccion}}</b></p>
                  <p class="card-text">Tel:{{$docentico->telefono}}</p>
                  <p class="card-text">{{$docentico->formacion}}</p>
                  <a href="#" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
