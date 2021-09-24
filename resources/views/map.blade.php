<?php
    $rota = Route::currentRouteName();
    session_start();   

    if(!isset($_SESSION['theme'])){        
        $_SESSION['theme'] = "light";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- STYLES - BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- MAPBOX -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    
    
    <title>Mapa</title>
</head>
<body  @if ($_SESSION["theme"] == "dark") class="dark-mode" @else class="" @endif>
    <div class="content">

        <nav class="navigation-bar">
            <div class="navigation">
                <h1 class="navigation-title">C.L.E.A.R</h1>
                <ul class="navigation-content">
                    @foreach ($caminhoes as $caminhao)
                        <li class="navigation-item">
                            <a href="#">
                                <img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
                                <span id="{{$caminhao["CAM_ID"]}}" onclick="center(this)">{{$caminhao["CAM_NOME"]}}</span>
                            </a>
                        </li>
                    @endforeach
                    


                    <li class="navigation-item active">
                        <a href="{{ route('theme', ['rota' => $rota]) }}">Mode</a>
                    </li>
                    @if (!isset($_SESSION["usr"]))
                        <li class="navigation-item login">
                            <a href="{{ url('/login') }}">Logar</a>
                        </li>
                    @else
                        <li class="navigation-item login">
                            <a href="{{ url('/template') }}">GerÃªncia</a>
                        </li>
                    @endif
                </ul>    
            </div>
            <div class="navigation-toggle" onclick="navigationToggle()">
                <img src="{{ asset('assets/images/arrow-back.png') }}" alt="toggle" />
            </div>
        </nav>
    </div>
    <div id="map"></div>

    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/js/darkmode.js') }}"></script>
    <!-- BOOTSTRAP -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>

</body>
</html>