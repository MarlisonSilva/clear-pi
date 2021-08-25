<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    
    <title>Mapa</title>
</head>
<body>
    <div class="side-bar">
        <ul>
            <li>#213242</li>
            <li>#3c5a72</li>
            <li>#517490</li>
            <li>#e3a92b</li>
            <li>#cd9a03</li>
            <li>#e1c888</li>
        </ul>
    </div>
    <div id="map"></div>
    <script src="{{ asset('assets/js/map.js') }}"></script>
</body>
</html>