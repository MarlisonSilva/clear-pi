@extends('layout.template')
@section('content')
<h1>Zonas! - BACK-END</h1>
<a href="{{ route('zones.create') }}">CRIAR</a>
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
        @if ($data !== false)
            @foreach ($data as $zone)
                <tr>
                    <td>{{$zone["ZON_NOME"]}}</td>
                    <td>{{$zone["ZON_HRFUNCIONAMENTO"] . "h"}}</td>
                    <td>{{$zone["ZON_DIASFUNCIONAMENTO"]}}</td>
                    <td>
                        <a href="{{ route('zones.edit', $zone["ZON_ID"]) }}">Editar</a>
                    </td>
                    <td>
                        <form id={{"form_delete_" . $zone["ZON_ID"]}} action={{ route('zones.destroy', $zone["ZON_ID"]) }} method="POST">
                            @method("DELETE")
                            @csrf
                            <a href="#" onclick="document.getElementById(`{{'form_delete_' . $zone['ZON_ID']}}`).submit();">Excluir</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        
    </tbody>
</table>
@endsection