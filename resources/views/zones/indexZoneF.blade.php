@extends('layout.template')
@section('content')
<h1>Zonas! - FRONT-END</h1>
<a href="{{ route('zonesTemp.create') }}">CRIAR</a>
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
                <a href="{{ route('zonesTemp.edit', 0) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('zonesTemp.edit', 1) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('zonesTemp.edit', 2) }}">Editar</a>
            </td>
            <td>Bla bla bla</td>
            <td>Bla bla bla</td>
        </tr>
    </tbody>
</table>
@endsection