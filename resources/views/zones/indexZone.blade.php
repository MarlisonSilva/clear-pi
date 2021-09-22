@extends('layout.template')
@section('content')
<h1 class="mt-5">Zonas</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Zonas
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('zones.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar">CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">Nome</th>
                        <th scope="col" class="col-3">Horário de Funcionamento</th>
                        <th scope="col" class="col-6">Dias de Funcionamento</th>
                        <th scope="col" class="col-1" colspan="2">Ação</th>
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
        </div>
    </div>
    
</div>

@endsection