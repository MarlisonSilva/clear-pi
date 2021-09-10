@extends('layout.clean-template')
@section('styles')
    {{-- BOOTSTRAP-SELECT STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    
@endsection
@section('content')
    <form action="{{ route('trucksTemp.store') }}" method="POST">
        <div class="form-group my-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nomeie o caminhão">
        </div>

        <div class="form-group my-3">
            <label for="zones[]">Zona(s)</label>
            <select class="selectpicker form-select form-control" id="zones[]" name="zones[]" data-live-search="true" title="Selecionar..." multiple>
                <option>Opção 1</option>
                <option>Opção 2</option>
                <option>Opção 3</option>
            </select>
        </div>
        

        <div class="form-group my-3">
            <label for="driver">Motorista</label>
            <select class="selectpicker form-select form-control" name="driver" id="driver" data-live-search="true" title="Selecionar...">
                <option value="opc1">Opção 1</option>
                <option value="opc2">Opção 2</option>
                <option value="opc3">Opção 3</option>
            </select>
        </div>
        
        <div class="form-group my-3">
            <label for="workers[]">Funcionários</label>
            <select class="selectpicker form-select form-control" name="workers[]" id="workers[]" data-live-search="true" title="Selecionar..." multiple>
                <option value="opc1">Opção 1</option>
                <option value="opc2">Opção 2</option>
                <option value="opc3">Opção 3</option>
            </select>
        </div>
        
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary px-5"><i class="ti ti-truck"></i>Criar</button>
        </div>
        
        <div class="form-group mt-2 mb-5">
            <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
        </div>
        
    </form>
@endsection
@section('scripts')
    {{-- BOOTSTRAP-V4 SCRIPT --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    {{-- BOOTSTRAP-SELECT SCRIPT --}}
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>

@endsection