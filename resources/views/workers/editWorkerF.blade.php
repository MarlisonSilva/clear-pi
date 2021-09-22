@extends('layout.clean-template')
@section('content')
    <form action="{{ route('workersTemp.update', 0) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome my-3">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do funcionário">
        </div>
        <div class="form-group my-3">
            <label for="matricula">Matrícula</label>
            <input type="number" name="matricula" class="form-control" id="matricula" placeholder="Prefeitura do funcionário">
        </div>
        <div class="form-group my-3">
            <label for="cargaH">Carga horária</label>
            <input type="number" name="cargaH" class="form-control" id="cargaH" placeholder="CH do funcionário">
        </div>
        
        <div class="form-group my-3">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Nº de telefone do funcionário">
        </div>
        
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary px-5"><i class="ti ti-truck"></i>Criar</button>
        </div>
        
        <div class="form-group mt-2 mb-5">
            <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
    </form>
@endsection