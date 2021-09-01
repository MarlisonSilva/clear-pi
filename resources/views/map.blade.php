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
	<div class="content">

		<nav class="navigation-bar">
			<div class="navigation">
				<h1 class="navigation-title">Título</h1>
				<ul class="navigation-content">
					<li class="navigation-item active">
						<a href="#">
							<img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
							<span>A very long Action</span>
						</a>
					</li>
					<li class="navigation-item">
						<a href="#">
							<img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
							<span>Action</span>
						</a>
					</li>
					<li class="navigation-item">
						<a href="#">
							<img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
							<span>Action</span>
						</a>
					</li>
					<li class="navigation-item">
						<a href="#">
							<img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
							<span>Action</span>
						</a>
					</li>
					<li class="navigation-item">
						<a href="#">
							<img class="icon" src="{{ asset('assets/images/favicon.ico') }}" alt="icon" />
							<span>Action</span>
						</a>
					</li>
					<li class="navigation-item active">
						<a href="#" onclick="mode()">Mode</a>
					</li>
				</ul>	
			</div>
			<div class="navigation-toggle" onclick="navigationToggle()">
				<img src="{{ asset('assets/images/arrow-back.png') }}" alt="toggle" />
			</div>
		</nav>
	</div>
	<div id="map"></div>
	<script src="{{ asset('assets/js/map.js') }}"></script>
	
	<!-- BOOTSTRAP -->
	<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.js')}}"></script>

</body>
</html>