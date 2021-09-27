@extends('layout.clean-template')
@section('styles')
    {{-- BOOTSTRAP-SELECT STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    
@endsection
@section('content')
    @foreach ($camData as $data)
        <form action="{{ route('trucks.update', $data["CAM_ID"]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nomeie o caminhão" value="{{$data['CAM_NOME']}}" required>
            </div>
            
            <div class="form-group my-3">
                <label for="zones[]">Zona(s)</label>
                <select class="selectpicker form-select form-control" id="zones[]" name="zones[]" data-live-search="true" title="Selecionar..." multiple required>
                    @foreach ($zonas as $zona)
                        <?php
                            $selected = false;
                            foreach ($zonasCam as $zc){
                                if($zc["ZOC_ZON_ID"] == $zona["ZON_ID"]){
                                    $selected = true;
                                    break;
                                }
                            } 
                        ?>
                        <option value="{{$zona["ZON_ID"]}}" @if ($selected) selected @endif>{{$zona["ZON_NOME"]}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group my-3">
                <label for="driver">Motorista</label>
                <select class="selectpicker form-select form-control" name="driver" id="driver" data-live-search="true" title="Selecionar..." required>
                    @foreach ($funcionarios as $funcionario)
                        <?php
                            $selected = false;
                            foreach ($motoristaCam as $fc){
                                if($fc["MOC_FUN_ID"] == $funcionario["FUN_ID"]){
                                    $selected = true;
                                    break;
                                }
                            } 
                        ?>
                        <option value="{{$funcionario["FUN_ID"]}}" @if ($selected) selected @endif>{{$funcionario["FUN_NOME"]}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group my-3">
                <label for="workers[]">Funcionários</label>
                <select class="selectpicker form-select form-control" name="workers[]" id="workers[]" data-live-search="true" title="Selecionar..." multiple required>
                    @foreach ($funcionarios as $funcionario)
                        <?php
                            $selected = false;
                            foreach ($funcionariosCam as $fc){
                                if($fc["CAF_FUN_ID"] == $funcionario["FUN_ID"]){
                                    $selected = true;
                                    break;
                                }
                            } 
                        ?>
                        <option value="{{$funcionario["FUN_ID"]}}" @if ($selected) selected @endif>{{$funcionario["FUN_NOME"]}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary px-5"><i class="ti ti-truck"></i>Editar</button>
            </div>
            
            <div class="form-group mt-2 mb-5">
                <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i> Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection
@section('scripts')
    {{-- BOOTSTRAP-V4 SCRIPT --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    {{-- BOOTSTRAP-SELECT SCRIPT --}}
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>

@endsection