@extends('auth.master.master')

@section('head-title', 'Entrar')
@section('head-description', 'Faça login para acessar!')
@section('content-title', 'Informe seu email e sua senha para entrar na plataforma.')

@section('content')
    <div class="ajax_response"></div>

    <!-- form -->
    <form action="{{ route('login.do') }}" method="post" autocomplete="off" name="login">

        <div class="form-group">
            <label for="emailaddress"><i class="uil-envelope"></i> Email</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Informe seu email"
                   name="email" value="admin@pride.com">
        </div>
        <div class="form-group">
            <a href="" class="text-muted float-right">
                <small>Esqueceu sua senha?</small>
            </a>
            <label for="password"><i class="uil uil-lock-open-alt"></i> Senha</label>
            <input class="form-control" type="password" required="" id="password" placeholder="Informe sua senha"
                   name="password" value="1234">
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"><i class="mdi mdi-login"></i> Log In</button>
        </div>
        <!-- social-->
        <div class="text-center mt-4">
            <p class="text-muted font-16">Ainda não tem conta? <a href="" class="text-muted"><U>Cadastre-se agora!</U> 😍</a></p>
        </div>
    </form>
    <!-- end form-->
@endsection

@section('js')
<script src="{{ url(mix('backend/assets/js/login.js')) }}"></script>
@endsection