@extends('admin.auth.auth-master')

@section('head-title', 'Entrar')
@section('head-description', 'Faça login para acessar!')
@section('content-title', 'Informe seu email e sua senha para acessar o painel administrativo.')

@section('content')
    <!-- form -->
    <form action="#" method="post" autocomplete="off">
        @csrf

        <div class="form-group">
            <label for="emailaddress">Email</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Informe seu email"
                   name="email">
        </div>
        <div class="form-group">
            <a href="{{ route('auth.forgot') }}" class="text-muted float-right">
                <small>Esqueceu sua senha?</small>
            </a>
            <label for="password">Senha</label>
            <input class="form-control" type="password" required="" id="password" placeholder="Informe sua senha"
                   name="pass">
        </div>
        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                <label class="custom-control-label" for="checkbox-signin">Lembrar de mim</label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"><i class="mdi mdi-login"></i> Log In</button>
        </div>
        <!-- social-->
        <div class="text-center mt-4">
            <p class="text-muted font-16">Não possuí uma conta? <a href="{{ route('auth.register') }}" class="text-muted"><b>Faça seu
                        cadastro! 😍</b></a></p>
        </div>
    </form>
    <!-- end form-->
@endsection