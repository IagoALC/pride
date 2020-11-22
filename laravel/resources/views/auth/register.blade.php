@extends('auth.master.master')

@section('head-title', 'Cadastre-se')
@section('head-description', 'Faça o seu cadastro agora!')
@section('content-title', 'Informe os dados solicitados para se cadastrar na plataforma.')

@section('content')
    <div class="ajax_response"></div>

    <!-- form -->
    <form action="{{ route('register.do') }}" method="post" autocomplete="off" name="register">

        <div class="form-group">
            <label for="first_name"><i class="uil-user"></i> Primeiro Nome</label>
            <input class="form-control" type="text" id="first_name" placeholder="Coloque o seu nome"
                   name="first_name" value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
            <label for="last_name"><i class="uil-users-alt"></i> Segundo Nome</label>
            <input class="form-control" type="text" id="last_name" placeholder="Coloque o seu segundo nome"
                   name="last_name" value="{{ old('last_name') }}">
        </div>
        <div class="form-group">
            <label for="document"><i class="mdi mdi-fingerprint"></i> CPF</label>
            <input class="form-control" type="text" id="document" placeholder="Coloque o seu CPF"
                   name="document" value="{{ old('document') }}" data-toggle="input-mask"
                   data-mask-format="000.000.000-00" data-reverse="true">
        </div>
        <div class="form-group">
            <label for="email"><i class="uil-envelope"></i> Email</label>
            <input class="form-control" type="email" id="email" required="" placeholder="Coloque o seu email"
                   name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password"><i class="uil uil-lock-open-alt"></i> Senha</label>
            <input class="form-control" type="password" required="" id="password" placeholder="Coloque sua senha"
                   name="password" value="">
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"><i class="mdi mdi-login"></i> Sign Up</button>
        </div>
        <!-- social-->
        <div class="text-center mt-4">
            <p class="text-muted font-16">Já tem conta? <a href="{{ route('login') }}" class="text-muted"><U>Faça login agora!</U> 😍</a></p>
        </div>
    </form>
    <!-- end form-->
@endsection

@section('js')
    <script src="{{ url(mix('backend/assets/js/register.js')) }}"></script>
@endsection