@extends('admin.auth.auth-master')

@section('head-title', 'Registrar')
@section('head-description', 'Faça seu cadastro para acessar!')
@section('content-title', 'Seu e-mail precisa ser verificado. Aguardando...')

@section('scripts')
    <script>
        $(document).ready(() => {

        })
    </script>
@endsection

@section('content')
    <!-- form -->
    <form action="#" method="post" autocomplete="off" class="needs-validation" novalidate>
        @csrf


        <div id="bar" class="progress mb-3" style="height: 7px;">
            <div id="progresso" class="bar progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%;"></div>
        </div>

        <div class="d-block" id="fase3">
            <div class="text-center">
                <h1 class="mt-0"><i class="mdi mdi-check-all"></i></h1>
                <h2 class="mt-0">Verifique Seu E-mail!</h2>
                <h4>Acesse rapidamente:</h4>
                <h3 class="mb-2 mt-1 mx-auto"><a href=""><img src="https://img.icons8.com/fluent/22/000000/gmail.png"/></a> - <a href=""><img src="https://img.icons8.com/color/22/000000/yahoo.png"/></a> - <a href=""><img src="https://img.icons8.com/color/22/000000/ms-outlook.png"/></a></h3>
            </div>
        </div>
        <!-- social-->
        <div id="sucesso" class="text-center mt-4">
            <p class="text-muted font-16">Falta apenas um passo para você se cadastrar e poder agendar consultas ou comprar em nossa loja! </p>
        </div>
    </form>
    <!-- end form-->
@endsection