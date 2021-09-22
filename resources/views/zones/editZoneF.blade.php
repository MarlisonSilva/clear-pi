@extends('layout.clean-template')
@section('content')
    <form action="{{ route('zonesTemp.update', 0) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group my-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da zona">
        </div>

        <div class="form-group my-3">
            <label for="horario">Horário de funcionamento</label>
            <input type="text" class="form-control" name="horario" id="horario" placeholder="hh:mm - hh:mm">
        </div>

        <div class="form-group my-3">
            
            <label>Dias de funcionamento</label>
            <div class="row my-2" id="tabela-dias">   
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check w-25" name="domingo" id="domingo" autocomplete="off">
                    <label class="btn btn-outline-dark w-25" for="domingo" id="dia-checkbox">Domingo</label>
                
                    <input type="checkbox" class="btn-check w-25" name="segunda" id="segunda" autocomplete="off">
                    <label class="btn btn-outline-dark w-25" for="segunda" id="dia-checkbox">Segunda</label>
                
                    <input type="checkbox" class="btn-check w-25" name="terca" id="terca" autocomplete="off">
                    <label class="btn btn-outline-dark w-25" for="terca" id="dia-checkbox">Terça</label>
                    
                </div>
            </div>
            <div class="row my-2" id="tabela-dias">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check w-25" name="quarta" id="quarta">
                    <label class="btn btn-outline-dark w-25" for="quarta" id="dia-checkbox">Quarta</label>
                
                
                    <input type="checkbox" class="btn-check w-25" name="quinta" id="quinta" autocomplete="off">
                    <label class="btn btn-outline-dark w-25" for="quinta" id="dia-checkbox">Quinta</label>
                
                    <input type="checkbox" class="btn-check w-25" name="sexta" id="sexta" autocomplete="off">
                    <label class="btn btn-outline-dark w-25" for="sexta" id="dia-checkbox">Sexta</label>
                </div>
            </div>
            <div class="row my-2" id="tabela-dias">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" name="sabado" id="sabado" autocomplete="off">
                    <label class="btn btn-outline-dark" for="sabado" id="dia-checkbox">Sábado</label>
                </div>
            </div>  
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary px-5"><i class="fa fa-road"></i> Confirmar</button>
        </div>

        <div class="form-group mt-2 mb-3">
            <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
    </form>
@endsection