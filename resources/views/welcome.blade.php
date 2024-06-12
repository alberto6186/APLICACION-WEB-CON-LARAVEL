
<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <<section class="section">
        <h1>Adquiere tu Soat y aprovecha todos los beneficios que tenemos para ti</h1>
        <div class="secciones">

            <div class="contenido-imagen">
                <h2>Compra tu Soat con nosotros</h2>
                <div class="imagen">
                    <img src="{{ asset('img/auto.png') }}" alt="Descripción de la imagen">
                </div>
            </div>
            <div class="consulta">
                <h2>Consulta tu soat</h2>
                <form action="" class="formulario">
                    <div class="form-campo">
                        <input type="text" id="placa" placeholder="Placa" class="input" required>
                    </div>
                    <div class="form-campo">
                        <input type="number" id="identificacion" placeholder="Identificacion" class="input" required>
                    </div>
                    <div class="form-campo">
                        <input  id="abrirModalBtn" type="submit" value="Consultar" class="boton-registrarse">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="modalPersonalizado" class="modal-personalizado">
        <div class="modal-contenido">
            <span class="cerrar-btn">&times;</span>
            <img src="{{ asset('img/auto.png') }}" alt="Seguro" class="imagen-modal">
            <h2>Consulta tu Seguro</h2>
            <p class="info-modal">
                Asegúrate de tener toda tu información a la mano para una consulta rápida y segura.
            </p>
            <div class="modal-cuerpo">
                <button class="btn btn-success mb-3" onclick="window.location.href='{{ route('registros.create') }}'">Registrarse aquí</button>

                <button class="btn btn-primary" href="/registros/login" >Iniciar sesión</button>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("modalPersonalizado");
        var abrirModalBtn = document.getElementById("abrirModalBtn");
        var cerrarBtn = document.getElementsByClassName("cerrar-btn")[0];

        abrirModalBtn.onclick = function () {
            modal.style.display = "flex";
        }

        cerrarBtn.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
