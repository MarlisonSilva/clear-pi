@extends('layout.clean-template')
@section('content')
    <form action="{{ route('workersTemp.store') }}" method="POST">
    <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do funcionário">
        </div>
        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="number" name="matricula" class="form-control" id="matricula" placeholder="Prefeitura do funcionário">
        </div>
        <div class="form-group">
            <label for="cargaH">Carga horária</label>
            <input type="number" name="cargaH" class="form-control" id="cargaH" placeholder="CH do funcionário">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Nº de telefone do funcionário">
            
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-user"></i> Criar</button>
        </div>
        
        <div class="form-group">
            <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
    </form>
@endsection