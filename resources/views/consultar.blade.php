<!-- resources/views/consultar.blade.php -->

@extends('layouts.app')

@section('title', 'Consulta SOAT')

@section('content')
    <section class="section">
        <h1>Adquiere tu Soat y aprovecha todos los beneficios que tenemos para ti</h1>
        <div class="secciones">
            <div class="contenido-imagen">
                <h2>Compra tu Soat con nosotros</h2>
                <div class="imagen">
                    <img src="{{ asset('img/auto.png') }}" alt="Descripción de la imagen">
                </div>
            </div>
            <div class="consulta">
                <h2>Consulta tu Soat</h2>
                <form action="{{ route('consultar.soat') }}" method="POST" class="formulario" id="consultaForm">
                    @csrf
                    <div class="form-campo">
                        <input type="text" name="placa" id="placa" placeholder="Placa" class="input" required>
                        <span id="errorPlaca" class="error" style="color: red; background-color: white; display: none;"></span>
                    </div>
                    <div class="form-campo">
                        <input type="number" name="identificacion" id="identificacion" placeholder="Identificación" class="input" required>
                        <span id="errorIdentificacion" class="error" style="color: red; background-color: white; display: none;"></span>
                    </div>
                    <div class="form-campo">
                        <input type="submit" value="Consultar" class="boton-registrarse">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var consultaForm = document.getElementById("consultaForm");

        consultaForm.addEventListener('submit', function(event) {
            var placa = document.getElementById("placa").value.trim().toUpperCase(); // Convertir a mayúsculas
            var identificacion = document.getElementById("identificacion").value.trim();

            var valid = true;

            // Validación de la placa
            if (!validarPlaca(placa)) {
                mostrarError("errorPlaca", "Formato de placa inválido");
                valid = false;
            } else {
                ocultarError("errorPlaca");
            }

            // Validación de la identificación
            if (!validarIdentificacion(identificacion)) {
                mostrarError("errorIdentificacion", "Identificación inválida");
                valid = false;
            } else {
                ocultarError("errorIdentificacion");
            }

            // Si alguna validación falla, evitar el envío del formulario
            if (!valid) {
                event.preventDefault();
            }
        });

        // Función para validar el formato de la placa
        function validarPlaca(placa) {
            var regexPlaca = /^[A-Z]{3}\d{2}[A-Z]$/;
            return regexPlaca.test(placa);
        }

        // Función para validar la identificación
        function validarIdentificacion(identificacion) {
            var regexIdentificacion = /^\d{8,10}$/;
            return regexIdentificacion.test(identificacion);
        }

        // Función para mostrar un mensaje de error
        function mostrarError(id, mensaje) {
            var errorSpan = document.getElementById(id);
            errorSpan.textContent = mensaje;
            errorSpan.style.display = "block";
            setTimeout(function() {
                errorSpan.style.display = "none";
            }, 5000);
        }

        // Función para ocultar un mensaje de error
        function ocultarError(id) {
            var errorSpan = document.getElementById(id);
            errorSpan.textContent = "";
            errorSpan.style.display = "none";
        }
    });
</script>
