<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerencia</title>

    {{-- BOOSTRAP STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- CSS ORIGINAL --}}
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
   
</head>
<body>
    {{-- Main --}}
    <div class="wrapper">

        {{-- SideBar --}}
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>C.L.E.A.R</h3>
            </div>
            <hr>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{ url('/') }}">
                        <i id="icon1" class="bi bi-house-fill"></i><span> Página Principal</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zone') }}">
                        <i id="icon2" class="bi bi-globe"></i><span> Zonas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/truck') }}">
                        <i id="icon3" class="bi bi-truck"></i><span> Caminhões</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/worker') }}">
                        <i id="icon4" class="bi bi-people-fill"></i><span> Funcionários</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="toggleMode();">
                        <i id="icon5" class="bi bi-moon-stars-fill"></i><span> Mudar Tema</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/running') }}">
                        <i id="icon6" class="i bi-stopwatch-fill"></i><span> Começar coleta</span>
                    </a>
                </li>
                <hr>
            </ul>
        </nav>

        {{-- Page Content --}}
        <nav id="content">

            <nav id="header" class="navbar">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn nav-item">
                        <i class="bi bi-justify"></i>
                    </button>
                    <div id="user" class="dropstart">
                        <a href="#" class="d-flex" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://clipground.com/images/user-icon-png-free-2.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                      </div>
                </div>
            </nav>

            <div id="main">
                @yield('content')
            </div>  
        </nav>
    </div>

    

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/darkmode.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>