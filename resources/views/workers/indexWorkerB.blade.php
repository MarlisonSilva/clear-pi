@extends('layout.template')
@section('content')
<h1>Funcionários! - BACK-END</h1>
<a href="{{ route('workers.create') }}">CRIAR</a>
<table>
    <thead>
        <tr>
            <th>Ação</th>
            <th>Bla bla bla</th>
            <th>Bla bla bla</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a href="{{ route('workers.edit', 0) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('workers.edit', 1) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('workers.edit', 2) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
    </tbody>
</table>
@endsection