<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Mapa</title>
</head>
<body>
    <div class="side-bar">
        {{-- <ul class="nav nav-tabs">
            <li class="nav-item">#213242</li>
            <li class="nav-item">#3c5a72</li>
            <li class="nav-item">#517490</li>
            <li class="nav-item">#e3a92b</li>
            <li class="nav-item">#cd9a03</li>
            <li class="nav-item">#e1c888</li>
        </ul> --}}
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        
        <button type="button" class="btn btn-lg btn-test">Teste</button>
        <button type="button" class="btn btn-lg btn-teste">Teste</button>
    </div>
    <div id="map"></div>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    
    <!-- BOOTSTRAP -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>

</body>
</html>