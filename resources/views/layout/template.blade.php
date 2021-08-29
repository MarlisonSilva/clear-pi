<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerencia</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

    <!-- SideBar -->
    <div id="sidebar" class="wrapper">
        <div class="container-fluid md">
            <h2 style="text-align:center;">C.L.E.A.R</h2>
        </div>

        <div class="container flex-wrap">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/') }}">
                        <i class="bi bi-square-fill"><span> Página Principal</span></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/zone') }}">
                        <i class="bi bi-globe"><span> Zonas</span></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/truck') }}">
                        <i class="bi bi-truck"><span> Caminhões</span></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/worker') }}">
                        <i class="bi bi-people-fill"><span> Funcionários</span></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Todo o Resto da Pagina -->
    <div style="margin-left:20%">
        <!-- Header -->
        <nav id="header" class="navbar navbar-expand-lg">
            <button class="col-1 btn"><i class="bi bi-list-ul"></i></button>

            <i class="bi bi-person-circle">
            </i>
            
        </nav>
        <!-- Página em Sí -->
        <div id="full-container" style="margin-top: 3rem;">
            @yield('content')
        </div>    
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>