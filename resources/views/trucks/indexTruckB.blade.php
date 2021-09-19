@extends('layout.template')
@section('content')
<h1>Caminhões! - BACK-END</h1>
<a href="{{ route('trucks.create') }}">CRIAR</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Zonas</th>
            <th>Motorista</th>
            <th>Funcionários</th>
            <th colspan="2">Ações</th>
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
@endsection