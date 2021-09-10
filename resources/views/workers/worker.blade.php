@extends('layout.template')
@section('content')
<h1>Listagem de Funcionários!</h1> 
<h2>
    <a href="#">
        <a href="{{ route('workersTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i></a>
    </a>
</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Carga Horária</th>
        <th>Telefone</th>
    </tr>
    <tr>
        <td><a href="{{ route('workersTemp.edit', 0) }}">Carlinho Faria</a></td>
        <td>14546432</td>
        <td>8h~16h</td>
        <td>2222-2222</td>

    </tr>
    <tr>
        <td><a href="{{ route('workersTemp.edit', 0) }}">Patricio Pereira</a></td>
        <td>24647542</td>
        <td>7h~18h</td>
        <td>3333-3333</td>
    </tr>
    <tr>
        <td><a href="{{ route('workersTemp.edit', 0) }}">Robson Dantas</a></td>
        <td>33636746</td>
        <td>5h~10h</td>
        <td>1111-1111</td>
    </tr>
</table>
<a href="{{ route('workers.index')}}">BACK-END</a><br>
<a href="{{ route('workersTemp.index')}}">FRONT-END</a><br>
@endsection