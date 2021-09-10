@extends('layout.template')
@section('content')
<h1 class="mt-5">Caminhões! - FRONT-END</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-1">
        <div class="card-title col-11 m-0 align-middle">
            <h2 class="m-0 py-2">
                Tabela de Caminhões
            </h2>
        </div>
        <div class="col-1 align-middle py-3">
            <a href="{{ route('trucksTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar">CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="col-2">Nome</th>
                        <th scope="col" class="col-2">Zona(s)</th>
                        <th scope="col" class="col-2">Motorista</th>
                        <th scope="col" class="col-4">Funcionarios</th>
                        <th scope="col" class="col-1">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Caminhão 01</td>
                        <td>Norte</td>
                        <td>Roberto Paiva</td>
                        <td>Ari Oliveira - Daniel Santos</td>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Caminhão 02</td>
                        <td>Sul</td>
                        <td>Ari Oliveira</td>
                        <td>Romerito Campos - Daniel Santos - Pedro Iuri</td>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-danger" type="button"><i class="bi bi-trash danger"></i></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Caminhão 04</td>
                        <td>Leste - Oeste</td>
                        <td>Pedro Iuri</td>
                        <td>Ari Oliveira - Daniel Santos</td>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
                                <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-pen-fill"></i></button>
                            </a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">
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