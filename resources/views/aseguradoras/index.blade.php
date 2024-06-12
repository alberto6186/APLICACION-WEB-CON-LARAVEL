@extends('layouts.app')

@section('titulo', 'Docentes Creados')

@section('content')

    <br>
    <br>
    <br>
    <br>
    <div class="contenido">
        <h1 >Listado de aseguradoras</h1>
    <a href="aseguradoras/create" class="boton-registrarse no-decorado">Crear nueva aseguradora</a>

    @if(session('status') == 'deleted')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: 'Eliminada con éxito!',
                    text: 'La aseguradora ha sido eliminada.',
                    icon: 'success',
                    timer: 5000,  // Duración en milisegundos
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '{{ route('aseguradoras.index') }}';
                });
            });
        </script>
    @endif
    @if(session('status') == 'create')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: 'Creada con éxito!',
                    text: 'La aseguradora ha sido creada.',
                    icon: 'success',
                    timer: 5000,  // Duración en milisegundos
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '{{ route('aseguradoras.index') }}';
                });
            });
        </script>
    @endif
    @if(session('status') == 'update')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: 'Editada con éxito!',
                    text: 'La aseguradora ha sido editada.',
                    icon: 'success',
                    timer: 5000,  // Duración en milisegundos
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '{{ route('aseguradoras.index') }}';
                });
            });
        </script>
    @endif

    <div class="card-container">
        @foreach ($teacher as $docentico)


            <div class="card">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($docentico->imagen) }}"
                        class="card-img-top mx-auto d-block" alt="...">
                <h3>{{ $docentico->nombre}}</h3>
                <p>Direccion: {{ $docentico->direccion }}</p>
                <p>Telefono: {{ $docentico->telefono }}</p>

                <div class="card-actions">
                    <a href="/aseguradoras/{{ $docentico->id }}"  class="btn btn-primary">Ver detalles</a>

                    <form id="delete-form-{{ $docentico->id }}" action="{{ route('aseguradoras.destroy', $docentico->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete({{ $docentico->id }})" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
        function showSuccessMessage() {
            const successMessage = document.getElementById('success-message');
            successMessage.style.display = 'block';
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        }
        </script>
        <style>
            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
            }
            .alert-success {
                color: #3c763d;
                background-color: #aae228;
                border-color: #d6e9c6;
            }
        </style>

    </div>


@endsection


