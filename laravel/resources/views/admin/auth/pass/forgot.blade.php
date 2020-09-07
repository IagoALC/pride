@extends('admin.auth.auth-master')

@section('head-title', 'Entrar')
@section('head-description', 'Faça login para acessar!')
@section('content-title', 'Informe seu email cadastrado para recuperar sua senha. E vê se não esquece de novo, viu?')

@section('content')
    <!-- form -->
    <form action="#" method="post" autocomplete="off">
        @csrf

        <div class="form-group">
            <label for="emailaddress">Email</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Informe seu email"
                   name="email">
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"><i class="mdi mdi-lock-reset"></i> Recuperar</button>
        </div>
        <!-- social-->
        <div class="text-center mt-4">
            <p class="text-muted font-16">Não possuí uma conta? <a href="{{ route('auth.register') }}" class="text-muted"><b>Faça seu
                        cadastro! 😍</b></a></p>
        </div>
    </form>
    <!-- end form-->
@endsection