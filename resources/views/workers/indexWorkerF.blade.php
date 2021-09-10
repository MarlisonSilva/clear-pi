@extends('layout.template')
@section('content')
<h1 class="mt-5">Funcionarios! - FRONT-END</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Funcionarios
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('workersTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar">CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="col-2">Nome</th>
                        <th scope="col" class="col-2">Matricula</th>
                        <th scope="col" class="col-3">Carga Horária</th>
                        <th scope="col" class="col-3">Telefone</th>
                        <th scope="col" class="col-1">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Roberto Pereira</td>
                        <td>122456778</td>
                        <td>13h - 17h</td>
                        <td>+55 (84) 99999-9999</td>
                        <td>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Santos Drummont</td>
                        <td>123456789</td>
                        <td>11h - 14h</td>
                        <td>+55 (34) 98888-9999</td>
                        <td>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ari Oliveira</td>
                        <td>1111111111</td>
                        <td>8h - 18h</td>
                        <td>+55 (84) 92222-2222</td>
                        <td>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('workersTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection