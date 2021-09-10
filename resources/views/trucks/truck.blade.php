@extends('layout.template')
@section('content')
    <h1>Escolha</h1><br>
    <a href="{{ route('trucks.index')}}">BACK-END</a><br>
    <a href="{{ route('trucksTemp.index')}}">FRONT-END</a><br>
@endsection