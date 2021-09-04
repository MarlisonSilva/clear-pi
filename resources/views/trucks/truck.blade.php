@extends('layout.template')
@section('content')
<h1>Listagem de Caminhões!</h1> 
<h2>
    <a href="#">
        <i class="bi bi-plus-circle-fill"></i>
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
        <td><a href="#indexId">Carlinho Do Teste</a></td>
        <td>1</td>
        <td>13h~15h</td>
        <td>Quarta/Sábado/Quinta</td>

    </tr>
    <tr>
        <td><a href="#indexId">Patricio Testaria</a></td>
        <td>22</td>
        <td>11h~13h</td>
        <td>Segunda/Terça</td>
    </tr>
    <tr>
        <td><a href="#indexId">Robson Testas</a></td>
        <td>336</td>
        <td>18h~21h</td>
        <td>Sexta</td>
    </tr>
</table>
@endsection