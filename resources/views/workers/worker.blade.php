@extends('layout.template')
@section('content')
<h1>Funcionários!</h1>
<a href="{{ route('workers.index')}}">BACK-END</a><br>
<a href="{{ route('workersTemp.index')}}">FRONT-END</a>
@endsection