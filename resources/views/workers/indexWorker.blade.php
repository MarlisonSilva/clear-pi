@extends('layout.template')
@section('content')
<h1 class="mt-5">Funcionários</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Funcionários
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('workers.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar"> CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="col-2">Nome</th>
                        <th scope="col" class="col-2">Matrícula</th>
                        <th scope="col" class="col-3">Carga Horária</th>
                        <th scope="col" class="col-3">Telefone</th>
                        <th scope="col" class="col-1 text-center" colspan="2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr>
                            <td>{{$funcionario["FUN_NOME"]}}</td>
                            <td>{{$funcionario["FUN_MATRICULA"]}}</td>
                            <td>{{$funcionario["FUN_CH"]}}</td>
                            <?php $numero = 0?>
                            @foreach ($telefones as $telefone)
                                <?php
                                    if($telefone["TEF_FUN_ID"] == $funcionario["FUN_ID"]){
                                        $numero = $telefone["TEF_TELEFONE"];
                                    }
                                ?>
                            @endforeach
                            <td>{{$numero}}</td>
                            <td>
                                <a href="{{ route('workers.edit', $funcionario["FUN_ID"]) }}">Editar</a>
                            </td>
                            <td>
                                <form id={{"form_delete_" . $funcionario["FUN_ID"]}} action="{{ route('workers.destroy', $funcionario["FUN_ID"]) }}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <a href="#" onclick="document.getElementById(`{{'form_delete_' . $funcionario['FUN_ID']}}`).submit();">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection