@extends('layout.template')
@section('content')
<h1 class="mt-5">Zonas! - FRONT-END</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Zonas
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('zonesTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar">CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">Nome</th>
                        <th scope="col" class="col-3">Horário de Funcionamento</th>
                        <th scope="col" class="col-6">Dias de Funcionamento</th>
                        <th scope="col" class="col-1">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Norte</td>
                        <td>12h - 15h</td>
                        <td>Segunda/Terça</td>
                        <td>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Sul</td>
                        <td>12h - 18h</td>
                        <td>Segunda/Terça/Quarta/Quinta/Sexta</td>
                        <td>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Oeste</td>
                        <td>14h - 17h</td>
                        <td>Quinta/Sexta</td>
                        <td>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('zonesTemp.edit', 0) }}">
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