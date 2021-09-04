@extends('layout.clean-template')
@section('content')
    <form action="{{ route('trucks.store') }}" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nomeie o caminhão">
        </div>

        <div class="form-group">
            <label for="zones[]">Zona(s)</label>
            <select class="form-select" id="zones[]" name="zones[]" data-live-search="true" title="Selecionar..." multiple>
                <option value="opc1">Opção 1</option>
                <option value="opc2">Opção 2</option>
                <option value="opc3">Opção 3</option>
            </select>
        </div>

        <div class="form-group">
            <label for="driver">Motorista</label>
            <select class="form-select" name="driver" id="driver" data-live-search="true" title="Selecionar...">
                <option value="opc1">Opção 1</option>
                <option value="opc2">Opção 2</option>
                <option value="opc3">Opção 3</option>
            </select>
        </div>

        <div class="form-group">
            <label for="workers[]">Funcionários</label>
            <select class="form-select" name="workers[]" id="workers[]" data-live-search="true" title="Selecionar..." multiple>
                <option value="opc1">Opção 1</option>
                <option value="opc2">Opção 2</option>
                <option value="opc3">Opção 3</option>
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="ti ti-truck"></i>Editar</button>
        </div>
        
        <div class="form-group">
            <a class="btn btn-light px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
    </form>
@endsection