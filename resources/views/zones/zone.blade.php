@extends('layout.template')
@section('content')
    <h1>Escolha</h1><br>
    <a href="{{ route('zones.index')}}">BACK-END</a><br>
    <a href="{{ route('zonesTemp.index')}}">FRONT-END</a><br>
@endsection