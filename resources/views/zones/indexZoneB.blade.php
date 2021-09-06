@extends('layout.template')
@section('content')
<h1>Zonas! - BACK-END</h1>
<a href="{{ route('zones.create') }}">CRIAR</a>
<?php
include(app_path()."/includes/php/CrudZones.php");
?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Horário(s) de Funcionamento</th>
            <th>Dia(s) de Funcionamento</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nome</td>
            <td>Horario Funcionamento</td>
            <td>Dia Funcionamento</td>
            <td>
                <a href="{{ route('zones.edit', 0) }}">Editar</a>
            </td>
            <td>
                <a href="{{ route('zones.destroy', 0) }}">Excluir</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection