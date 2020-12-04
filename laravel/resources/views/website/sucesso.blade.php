@extends('master.master')

@section('page-content')
    <div class="container py-5 py-sm-6 py-md-7">
        <div class="row justify-content-center pt-4">
            <div class="col-lg-7 col-md-9 col-sm-11">
                <h1 class="h2 pb-3">Consulta agendada com sucesso!</h1>
                <p class="font-size-sm">Entre na sua conta para visualizar as consultas agendadas.</p>
                <div class="bg-secondary rounded-lg px-3 py-4 p-sm-4">
                    <a class="btn btn-primary col-12" href="{{ route('auth.entrar') }}">Acessar minha conta</a>
                </div>
            </div>
        </div>
    </div>
@endsection