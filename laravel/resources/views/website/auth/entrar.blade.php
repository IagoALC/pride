@extends('master.master')

@section('body-style')
    background-color:#f7f7fc;
@endsection

@section('page-content')
    <section class="container d-flex justify-content-center align-items-center pt-3 pb-4" style="flex: 1 0 auto;">
        <div class="cs-signin-form">
            <div class="cs-signin-form-inner">
                <!-- Sign in view-->
                <div class="cs-view show" id="signin-view">
                    <h1 class="h2 text-center">Entrar</h1>
                    <p class="font-size-ms text-muted mb-4 text-center">Faça login em sua conta usando e-mail e senha
                        fornecidos durante o registro.</p>
                    <form class="needs-validation" novalidate="" action="{{ route('auth.entrarPost') }}" method="post" name="entrarPost">
                        @csrf
                        <div class="input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                            class="fe-mail"></i></span></div>
                            <input class="form-control prepended-form-control" type="email" placeholder="Email"
                                   required="" name="email">
                        </div>
                        <div class="input-group-overlay cs-password-toggle form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                            class="fe-lock"></i></span></div>
                            <input class="form-control prepended-form-control" type="password" placeholder="Senha"
                                   required="" name="password">
                            <label class="cs-password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i
                                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center form-group">
                            <a class="nav-link-style font-size-ms" href="#">Esqueceu sua senha?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                        <p class="font-size-sm pt-3 mb-0 text-center">Não tem uma conta? <a href="#"
                                                                                            class="font-weight-medium"
                                                                                            data-view="#signup-view">Cadastrar</a>
                        </p>
                    </form>
                </div>
                <!-- Sign up view-->
                <div class="cs-view" id="signup-view">
                    <h1 class="h2 text-center">Cadastrar</h1>
                    <p class="font-size-ms text-muted mb-4 text-center">O registro leva menos de um minuto, mas oferece controle total sobre suas consultas.</p>
                    <form class="needs-validation" novalidate="" action="{{ route('auth.cadastrar.post') }}" method="post" name="cadastrarPost">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Primeiro nome" required="" name="firstName" >
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Último nome" required="" name="lastName" >
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="CPF" required="" name="document" >
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email" required="" name="email" >
                        </div>
                        <div class="cs-password-toggle form-group">
                            <input class="form-control" type="password" placeholder="Senha" required="" name="password" >
                            <label class="cs-password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i
                                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                        <div class="cs-password-toggle form-group">
                            <input class="form-control" type="password" placeholder="Confirmar senha" required="" name="confirm_password" >
                            <label class="cs-password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i
                                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Whatsapp" required="" name="cell" >
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                        <p class="font-size-sm pt-3 mb-0 text-center">Já tem uma conta? <a href="#"
                                                                                                  class="font-weight-medium"
                                                                                                  data-view="#signin-view">Entrar</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection