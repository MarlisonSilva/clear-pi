@extends('layout.clean-template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
    <title>Login</title>
@section('content')

    <div class="container-fluid">
        <h1 class="text-center">Conecte-se Agora!</h1>
        <div class="d-flex justify-content-around align-items-center flex-column content-container">
            <form class="form-horizontal col-12 mt-3" method="POST" action="{{route('login.store')}}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuario" @if($error) value="{{$email}}" @endif required>
                    <label for="floatingInput">Endereço Email</label>
                  </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" required>
                    <label for="floatingPassword">Senha</label>
                </div>
                
                @if ($error)
                    <p>Usuário e senha incorretos</p>
                @endif

                <div class="row col-12 mt-4">
                    <div class="col-3"></div>
                    <input type="submit" class="btn btn-primary col-6 mb-3" value="Conectar">
                    <div class="col-3"></div>
                </div>
            </form> 

            {{-- <div class="row col-12 text-center mb-3">
                <a class="redirect" href="{{ url('/register') }}">Não possui uma conta? Registre-se agora!</a>
            </div> --}}
        </div>
    </div>
@endsection