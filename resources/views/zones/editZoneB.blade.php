@extends('layout.clean-template')
@section('content')
    @foreach ($data as $item)
        <form action="{{ route('zones.update', $item["ZON_ID"]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control input-shadow" value={{$item["ZON_NOME"]}}>
            </div>

            <div class="form-group">
                <label for="horario">Horario</label>
                <input type="text" name="horario" id="horario" class="form-control input-shadow" value={{$item["ZON_HRFUNCIONAMENTO"]}}>
            </div>

            <div class="form-group">
                
                <label for="funcionamento">Dias de funcionamento</label>
                <div class="row" id="tabela-dias"> 
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="domingo" id="domingo" />
                        <label class="custom-control-label" for="domingo" id="dia-checkbox">Domingo</label>
                    </div>
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="segunda" id="segunda" />

                        <label class="custom-control-label" for="segunda" id="dia-checkbox">Segunda</label>
                    </div>
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="terca" id="terca" />
                        <label class="custom-control-label" for="terca" id="dia-checkbox">Terça</label>
                    </div>
                </div>
                <div class="row" id="tabela-dias">
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="quarta" id="quarta" />
                        <label class="custom-control-label" for="quarta" id="dia-checkbox">Quarta</label>
                    </div>
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="quinta" id="quinta" />
                        <label class="custom-control-label" for="quinta" id="dia-checkbox">Quinta</label>
                    </div>
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="sexta" id="sexta" />
                        <label class="custom-control-label" for="sexta" id="dia-checkbox">Sexta</label>
                    </div>
                </div>
                <div class="row" id="tabela-dias">
                    <div class="custom-control custom-checkbox col">
                        <input type="checkbox" class="custom-control-input" name="sabado" id="sabado" />
                        <label class="custom-control-label" for="sabado" id="dia-checkbox">Sábado</label>
                    </div>
                </div>  
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5"><i class="icon-pencil"></i> Confirmar</button>
            </div>

            <div class="form-group">
                <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-arrow-left"></i> Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection