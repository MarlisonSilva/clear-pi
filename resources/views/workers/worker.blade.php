@extends('layout.template')
@section('content')
    <h1>Escolha</h1><br>
    <a href="{{ route('workers.index')}}">BACK-END</a><br>
    <a href="{{ route('workersTemp.index')}}">FRONT-END</a><br>
@endsection