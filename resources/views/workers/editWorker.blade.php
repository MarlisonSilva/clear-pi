@extends('layout.clean-template')
@section('content')
    @foreach ($data as $funcionario)
        <form action="{{ route('workers.update', $funcionario['FUN_ID']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome my-3">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $funcionario['FUN_NOME'] }}"
                    placeholder="Nome do funcionário" required>
            </div>
            <div class="form-group my-3">
                <label for="matricula">Matrícula</label>
                <input type="number" name="matricula" class="form-control" id="matricula"
                    value="{{ $funcionario['FUN_MATRICULA'] }}" placeholder="Prefeitura do funcionário" required>
            </div>
            <div class="form-group my-3">
                <label for="cargaH">Carga horária</label>
                <input type="number" name="cargaH" class="form-control" id="cargaH" value="{{ $funcionario['FUN_CH'] }}"
                    placeholder="CH do funcionário" required>
            </div>

            <div class="form-group my-3">
                <label for="telefone">Telefone</label>
                @foreach ($telefone as $tf)
                    <input type="text" name="telefone" class="form-control" id="telefone"
                        value="{{ $tf['TEF_TELEFONE'] }}" placeholder="Nº de telefone do funcionário" required>
                @endforeach
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary px-5"><i class="ti ti-truck"></i>Criar</button>
            </div>

            <div class="form-group mt-2 mb-5">
                <a class="btn btn-outline-danger px-5" href="javascript:history.back()"><i class="icon-trash"></i>
                    Cancelar</a>
            </div>
        </form>
    @endforeach
@endsection
