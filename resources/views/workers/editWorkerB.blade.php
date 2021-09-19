@extends('layout.clean-template')
@section('content')
    @foreach ($data as $funcionario)
        <form action="{{ route('workers.update', $funcionario["FUN_ID"]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control input-shadow" id="nome" value="{{$funcionario["FUN_NOME"]}}" placeholder="Nome do funcionário">
            </div>
            <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input type="number" name="matricula" class="form-control input-shadow" id="matricula" value="{{$funcionario["FUN_MATRICULA"]}}" placeholder="Matrícula do funcionário">
            </div>
            <div class="form-group">
                <label for="cargaH">Carga horária</label>
                <input type="number" name="cargaH" class="form-control input-shadow" id="cargaH" value="{{$funcionario["FUN_CH"]}}" placeholder="CH do funcionário">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                @foreach ($telefone as $tf)
                    <input type="text" name="telefone" class="form-control input-shadow" id="telefone" value="{{$tf["TEF_TELEFONE"]}}" placeholder="Número do funcionário">
                @endforeach
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5"><i class="icon-user"></i> Confirmar</button>
            </div>
            
            <div class="form-group">
                <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-arrow-left"></i> Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection