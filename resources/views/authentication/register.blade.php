@extends('layout.clean-template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
    <title>Register</title>
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Registre-se Agora!</h1>
        <div class="d-flex justify-content-around align-items-center flex-column content-container">
            <form class="form-horizontal col-12 mt-3" mehotd="POST" action="#">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Registrar E-mail</label>
                  </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Registrar Senha</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Repita a Senha</label>
                </div>

                <div class="row col-12 mt-4">
                    <div class="col-3"></div>
                    <input type="submit" class="btn btn-primary col-6 mb-3" value="Registrar">
                    <div class="col-3"></div>
                </div>
            </form> 

            <div class="row col-12 text-center mb-3">
                <a class="redirect"  href="{{ url('/login') }}">Já tem possui uma conta? Conecte-se agora!</a>
            </div>
        </div>
    </div>
@endsection