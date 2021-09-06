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
        @if ($response !== false)
            @while ($zone = $response->fetch_assoc())
                <tr>
                    <td>{{$zone["ZON_NOME"]}}</td>
                    <td>{{$zone["ZON_HRFUNCIONAMENTO"] . "h"}}</td>
                    <td>Dia Funcionamento</td>
                    <td>
                        <a href="{{ route('zones.edit', $zone["ZON_ID"]) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('zones.destroy', $zone["ZON_ID"]) }}">Excluir</a>
                    </td>
                </tr>
            @endwhile
            
        @endif
        
    </tbody>
</table>
@endsection