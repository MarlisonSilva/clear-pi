@extends('layout.template')
@section('content')

<h1>Listagem de Zonas!</h1> 
<h2>
    <a href="#">
        <i class="bi bi-plus-circle-fill"></i>
    </a>
</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Horário(s) de Funcionamento</th>
        <th>Dia(s) de Funcionamento</th>
    </tr>
    <tr>
        <td><a href="#indexId">Norte</a></td>
        <td>12h~16h</td>
        <td>Quarta/Sábado/Quinta</td>

    </tr>
    <tr>
        <td><a href="#indexId">Leste</a></td>
        <td>12h~16h</td>
        <td>Segunda/Terça</td>
    </tr>
    <tr>
        <td><a href="#indexId">Sul</a></td>
        <td>12h~18h</td>
        <td>Segunda/Terça/Quarta/Quinta/Sexta/Sábado</td>
    </tr>
</table>
<a href="{{ route('zones.index')}}">BACK-END</a><br>
<a href="{{ route('zonesTemp.index')}}">FRONT-END</a><br>
@endsection