<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasySoat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">
                <img src="{{ asset('img/LOGO BLANCO.png') }}" alt="Descripción de la imagen">

            </a>

            <ul class="nav-menu" id="nav-menu">
                <li class="nav-menu-item"><a href="/cursos/create" class="nav-menu-link nav-link">Consulta tu soat</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link convenios" id="convenios">Convenios</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Login</a></li>
                <li class="nav-menu-item"><a href="/cursos" class="nav-menu-link nav-link">Registrate</a></li>

            </ul>
            <div class="nav-toggle" aria-label="Abrir menu" id="open">
                <span>&#9776;</span>
            </div>
        </nav>
    </header>
    <section class="section">
        <h1>Adquiere tu Soat y aprovecha todos ramiro los beneficios que tenemos para ti</h1>
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
                        <input type="text" id="placa" placeholder="Placa" class="input">
                    </div>
                    <div class="form-campo">
                        <input type="number" id="identificacion" placeholder="Identificacion" class="input">
                    </div>
                    <div class="form-campo">
                        <input type="submit" value="Consultar" class="boton">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="marca-logo">
            <h1>{R} RadSoft</h1>
        </div>
        <p>Desarrollamos tu software a tu medida</p>
    </footer>
    <script src="js/evento.js"></script>
</body>
</html>