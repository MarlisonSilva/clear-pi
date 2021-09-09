@extends('layout.template')
@section('content')
<div class="mt-5">
    <a href="{{ route('workers.index')}}">BACK-END</a><br>
    <a href="{{ route('workersTemp.index')}}">FRONT-END</a><br>
</div>

@endsection