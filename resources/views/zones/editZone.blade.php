@extends('layout.clean-template')
@section('content')
    @foreach ($data as $item)
        <form action="{{ route('zones.update', $item['ZON_ID']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group my-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da zona" value={{ $item['ZON_NOME'] }}>
            </div>
    
            <div class="form-group my-3">
                <label for="horario">Horário de funcionamento</label>
                <input type="text" class="form-control" name="horario" id="horario" placeholder="hh:mm - hh:mm" value={{ $item['ZON_HRFUNCIONAMENTO'] }}>
            </div>

            <div class="form-group my-3">

                <label for="funcionamento">Dias de funcionamento</label>

                <?php $i = 0; ?>
                @for ($j = 0; $j < 3; $j++)
                    <div class="row my-2" id="tabela-dias">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            @for ($k = 0; $k < 3; $k++)
                                @if ($i < count($dias))
                                    <input type="checkbox" class="btn-check" name={{ strtolower($dias[$i]) }}
                                        id={{ strtolower($dias[$i]) }} @if ($diasSelec[$i]) checked @endif />
                                    <label class="btn btn-outline-dark w-25" for={{ strtolower($dias[$i]) }}
                                        id="dia-checkbox">{{ $dias[$i] }}</label>
                                    <?php $i++; ?>
                                @endif

                            @endfor
                        </div>
                    </div>

                @endfor
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary px-5"><i class="fa fa-road"></i> Confirmar</button>
            </div>
    
            <div class="form-group mt-2 mb-3">
                <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection
