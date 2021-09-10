<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean-template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    {{-- BOOTSTRAP STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- CSS ORIGINAL --}}
    <link rel="stylesheet" href="{{ asset('assets/css/clean-template.css') }}">


    @yield('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="container-sm container-form d-flex flex-column">
            <div class="container-logo d-flex justify-content-center py-3">
                <img class="logo" src="{{ asset('assets/images/favicon.ico') }}" alt="LOGO">
            </div>
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

    @yield('scripts')
</body>
</html>