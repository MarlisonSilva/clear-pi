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
                @for ($i = 0; $i < count($dias); $i++)
                    @if ($i % 3 == 0 || $i == 0)
                        <div class="row" id="tabela-dias">   
                    @endif
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" name={{strtolower($dias[$i])}} id={{strtolower($dias[$i])}} @if ($diasSelec[$i]) checked @endif/>
                            <label class="custom-control-label" for={{strtolower($dias[$i])}} id="dia-checkbox">{{$dias[$i]}}</label>
                        </div>
                    @if (($i+1) % 3 == 0 || $i == count($dias)-1)
                        </div>
                    @endif
                @endfor
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5"><i class="icon-pencil"></i> Confirmar</button>
            </div>

            <div class="form-group">
                <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-arrow-left"></i> Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection