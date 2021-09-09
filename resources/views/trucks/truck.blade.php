@extends('layout.template')
@section('content')
<h1>Listagem de Caminhões!</h1> 
<h2>
    <a href="#">
        <a href="{{ route('trucksTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i></a>
    </a>
</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Id</th>
        <th>Horário(s) de Funcionamento</th>
        <th>Dia(s) de Funcionamento</th>
    </tr>
    <tr>
        <td><a href="{{ route('trucksTemp.edit', 0) }}"">Carlinho Do Teste</a></td>
        <td>1</td>
        <td>13h~15h</td>
        <td>Quarta/Sábado/Quinta</td>

    </tr>
    <tr>
        <td><a href="{{ route('trucksTemp.edit', 0) }}"">Patricio Testaria</a></td>
        <td>22</td>
        <td>11h~13h</td>
        <td>Segunda/Terça</td>
    </tr>
    <tr>
        <td><a href="{{ route('trucksTemp.edit', 0) }}"">Robson Testas</a></td>
        <td>336</td>
        <td>18h~21h</td>
        <td>Sexta</td>
    </tr>
</table>
<a href="{{ route('trucks.index')}}">BACK-END</a><br>
<a href="{{ route('trucksTemp.index')}}">FRONT-END</a><br>
@endsection