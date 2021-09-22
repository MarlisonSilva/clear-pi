@extends('layout.template')
@section('content')
<h1 class="mt-5">Caminhões</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Caminhões
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('trucks.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar"> CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle"  style="max-width: 98%">
                <thead>
                    <tr>
                        <th scope="col" class="col-2">Nome</th>
                        <th scope="col" class="col-2">Zona(s)</th>
                        <th scope="col" class="col-2">Motorista</th>
                        <th scope="col" class="col-4">Funcionarios</th>
                        <th scope="col" class="col-1 text-center"  colspan="2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data !== false)
                        <?php $c = 0 ?>
                        @foreach ($data as $truck)
                            <tr>
                                <td>{{$truck["CAM_NOME"]}}</td>
                                <td>{{implode(" - ", $zonas[$c])}}</td>
                                <td>MOTORISTA</td>
                                <td>{{implode(" - ", $funcionarios[$c])}}</td>
                                <td>
                                    <a href="{{ route('trucks.edit', $truck["CAM_ID"]) }}">Editar</a>
                                </td>
                                <td>
                                    <form id={{"form_delete_" . $truck["CAM_ID"]}} action="{{ route('trucks.destroy', $truck["CAM_ID"]) }}" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <a href="#" onclick="document.getElementById(`{{'form_delete_' . $truck['CAM_ID']}}`).submit();">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                            <?php $c++ ?>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection