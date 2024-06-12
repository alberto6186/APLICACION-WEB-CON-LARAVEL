<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'EasySoat')

@section('content')
</br>
</br>
</br>
</br>
</br>
</br>
    <br>
    <h1 class="text-center">Usuarios Registrados</h1>
    @if(session('status') == 'create')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: 'Creado con éxito!',
                    text: 'El usuario ha sido creado.',
                    icon: 'success',
                    timer: 5000,  // Duración en milisegundos
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '{{ route('registros.index') }}';
                });
            });
        </script>
    @endif
    <br>

    </br>
    </br>
    <table class="table">
        <thead>
            <tr>

                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Password</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($course as $cursito)
                <tr>
                    <td>{{ $cursito->nombre }}</td>
                    <td>{{ $cursito->apellidos }}</td>
                    <td>{{ $cursito->email }}</td>
                    <td>{{ $cursito->password }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
