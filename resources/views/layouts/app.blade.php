<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EasySoat')</title>
    <!-- Agrega aquí tus estilos CSS y otros recursos  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <header class="header">

        <nav class="nav">
            <a href="/" class="logo nav-link">
                <img src="{{ asset('img/LOGO BLANCO.png') }}" alt="Descripción de la imagen">

            </a>
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-menu-item"><a href="/" class="nav-menu-link nav-link">Consulta tu soat</a></li>
                <li class="nav-menu-item"><a href="/aseguradoras/create" class="nav-menu-link nav-link convenios" id="convenios">Convenios</a></li>
                <li class="nav-menu-item"><a href="/registros/login" class="nav-menu-link nav-link">Login</a></li>
                <li class="nav-menu-item"><a href="/registros/create" class="nav-menu-link nav-link">Registrate</a></li>
                <li class="nav-menu-item"><a href="/soat" class="nav-menu-link nav-link">Edit</a></li>
                <li class="nav-menu-item"><a href="/soat/create" class="nav-menu-link nav-link">Alis</a></li>
            </ul>
            <div class="nav-toggle" aria-label="Abrir menu" id="open">
                <span>&#9776;</span>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="marca-logo">
            <h1>{R} RadSoft</h1>
        </div>
        <p>Desarrollamos tu software a tu medida</p>
        <p>&copy; {{ date('Y') }} EasySoat. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
