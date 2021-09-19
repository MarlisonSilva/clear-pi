@extends('layout.template')
@section('content')
<h1>Funcionários! - BACK-END</h1>
<a href="{{ route('workers.create') }}">CRIAR</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Carga Horária</th>
            <th>Telefone</th>
            <th colspan="2">Ações</th>
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
                    <a href="{{ route('workers.destroy', $funcionario["FUN_ID"]) }}">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection