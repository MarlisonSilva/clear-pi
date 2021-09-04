@extends('layout.template')
@section('content')
<h1>Funcionários! - FRONT-END</h1>
<a href="{{ route('workersTemp.create') }}">CRIAR</a>
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
                <a href="{{ route('workersTemp.edit', 0) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('workersTemp.edit', 1) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('workersTemp.edit', 2) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
    </tbody>
</table>
@endsection