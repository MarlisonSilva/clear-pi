@extends('layout.clean-template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/start-running.css') }}">
@endsection
@section('content')
<div class="collect-container">
    <h1 class="text-center my-3">Começar coleta</h1>
    <div class="d-flex justify-content-around align-items-center flex-column conteudo">
        <div class="timer-container">
            <div class="d-flex justify-content-center flex-column my-3 circle ">
                <span class="text-center timer-counter">12:00</span>    
            </div>
            <p class="text-center timer-text">Tempo de coleta</p>
        </div>
        <div>
            <a class="btn bg-primary mt-3 button" onclick="run()">
                <img id="run" src="{{ asset('assets/images/play-fill.svg') }}" alt="Iniciar"> 
                <span> Iniciar coleta agora</span>
            </a>    
            <a class="btn mt-2 button" onclick="defineRun()">
                <img id="run" src="{{ asset('assets/images/calendar-week.svg') }}" alt="Definir anualmente">             
                <span>
                    Definir manualmente
                </span>
            </a>    
        </div>
        
    </div>
    
    
</div>


@endsection
@section('scripts')
    <script src="{{ asset('assets/js/start-running.js') }}"></script>

@endsection