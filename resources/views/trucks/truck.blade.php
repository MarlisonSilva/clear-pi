@extends('layout.template')
@section('content')
<div class="mt-5">
    <a href="{{ route('trucks.index')}}">BACK-END</a><br>
    <a href="{{ route('trucksTemp.index')}}">FRONT-END</a><br>
</div>

@endsection