@extends('layout.clean-template')
@section('content')
    <form action="{{ route('zones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da zona">
        </div>
        <div class="form-group">
            <label for="horario">Horário de funcionamento</label>
            <input type="text" class="form-control" name="horario" id="horario" placeholder="hh:mm - hh:mm">
        </div>
        
        <div class="form-group">
            
            <label for="funcionamento">Dias de funcionamento</label>
                @for ($i = 0; $i < count($dias); $i++)
                    @if ($i % 3 == 0 || $i == 0)
                        <div class="row" id="tabela-dias">   
                    @endif
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" name={{strtolower($dias[$i])}} id={{strtolower($dias[$i])}}/>
                            <label class="custom-control-label" for={{strtolower($dias[$i])}} id="dia-checkbox">{{$dias[$i]}}</label>
                        </div>
                    @if (($i+1) % 3 == 0 || $i == count($dias)-1)
                        </div>
                    @endif
                @endfor
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="fa fa-road"></i> Criar</button>
        </div>

        <div class="form-group">
            <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
    </form>
@endsection