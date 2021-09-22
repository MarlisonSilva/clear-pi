@extends('layout.clean-template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/start-running.css') }}">
@endsection
@section('content')
<div class="collect-container">
    <h1 class="text-center">Começar coleta</h1>
    <div class="d-flex justify-content-around align-items-center flex-column content-container">
        <div class="timer-container">
            <div class="d-flex justify-content-center flex-column mb-3 circle ">
                <span class="text-center timer-counter" id="stopwatch">00:00:00</span>    
            </div>
            <p class="text-center timer-text mb-4">Tempo de coleta</p>
        </div>
        <div class="tools-running">
            <div class="d-flex flex-column">
                <a class="btn btn-primary mt-3 button" onclick="run();">
                    <img id="run" src="{{ asset('assets/images/play-fill.svg') }}" alt="Iniciar"> 
                    <span id="text-run"> Iniciar coleta agora</span>   
                </a> 
                <div class="gap-1 d-flex justify-content-center mt-1 w-100">   
                    <select class="btn btn-primary w-50" name="trucks" id="trucks">
                    @if (mysqli_fetch_row($caminhoes))
                        @foreach ($caminhoes as $caminhao)
                            <option value="{{$caminhao["CAM_ID"]}}">{{$caminhao["CAM_NOME"]}}</option>
                        @endforeach
                    @endif
                    </select>
                    <select class="btn btn-primary w-50" name="zones" id="zones">
                    @if (mysqli_fetch_row($zonas))
                        @foreach ($zonas as $zona)
                            <option value="{{$zona["ZON_ID"]}}">{{$zona["ZON_NOME"]}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>
            
            <a class="btn mt-1 button" onclick="defineRun()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="{{ asset('assets/images/calendar-week.svg') }}" alt="Definir anualmente">
                &nbsp;            
                <span>
                    Definir manualmente
                </span>
            </a>    
            <a class="btn btn-outline-danger mt-1 button" href="javascript:history.back()">                
                <i class="bi bi-trash"></i>
                Cancelar
            </a>
        </div>
        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Intervalo de coleta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label" for="inicio">Início</label><br>
                        <input class="form-control" type="datetime-local" name="inicio" />
                    </div>
                    <div>
                        <label class="form-label" for="inicio">Fim</label><br>
                        <input class="form-control" type="datetime-local" id="fim" />
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    
</div>


@endsection
@section('scripts')
    <script src="{{ asset('assets/js/start-running.js') }}"></script>
@endsection