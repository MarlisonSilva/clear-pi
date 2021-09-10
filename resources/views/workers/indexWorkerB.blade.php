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
        <tr>
            <td>Nome</td>
            <td>Matrícula</td>
            <td>Carga Horária</td>
            <td>Telefone</td>
            <td>
                <a href="{{ route('workers.edit', 0) }}">Editar</a>
            </td>
            <td>
                <a href="{{ route('workers.edit', 0) }}">Editar</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection