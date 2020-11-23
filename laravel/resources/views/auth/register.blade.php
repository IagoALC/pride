@extends('auth.master.master')

@section('head-title', 'Cadastre-se')
@section('head-description', 'Faça o seu cadastro agora!')
@section('content-title', 'Informe os dados solicitados para se cadastrar na plataforma.')

@section('content')
    <div class="ajax_response"></div>

    <!-- form -->
    <form action="{{ route('register.do') }}" method="post" autocomplete="off" name="register">

        <div class="form-group">
            <label for="first_name"><i class="mdi mdi-account-question"></i> Primeiro Nome</label>
            <input class="form-control" type="text" id="first_name" placeholder="Coloque o seu nome"
                   name="first_name" value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
            <label for="last_name"><i class="mdi mdi-account-question"></i> Segundo Nome</label>
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
            <label for="genre"><i class="mdi mdi-gender-male-female"></i> Sexo</label>
            <select class="form-control" id="example-select" name="genre">
                <optgroup label="Escolher...">
                    <option value="unknow" {{ old('genre')}}>
                        Prefiro não dizer
                    </option>
                    <option value="female" {{ old('genre')}}>
                        Feminino
                    </option>
                    <option value="male" {{ old('genre')}}>
                        Masculino
                    </option>
                </optgroup>
            </select>
        </div>
        <div class="form-group">
            <label for="date_of_birth"><i class="mdi mdi-calendar"></i> Data de Nascimento</label>
            <input id="date_of_birth" name="date_of_birth" type="text"
                   class="form-control" data-provide="datepicker"
                   data-date-format="dd/mm/yyyy" data-date-autoclose="true"
                   value="{{ old('date_of_birth') }}">
        </div>
        <div class="form-group">
            <label for="came_from"><i class="mdi mdi-web"></i> Como nos conheceu?</label>
            <select class="form-control" id="example-select" name="came_from">
                <optgroup label="Escolher...">
                    <option value="unknow" {{ old('came_from')}}>
                        Prefiro não dizer
                    </option>
                    <option value="ads" {{ old('came_from')}}>
                        Anúncios nas rede sociais
                    </option>
                    <option value="seo" {{ old('came_from')}}>
                        Sites de buscas
                    </option>
                    <option value="recommendation" {{ old('came_from')}}>
                        Indicação de amigos
                    </option>
                    <option value="others" {{ old('came_from')}}>
                        Outros
                    </option>
                </optgroup>
            </select>
        </div>
        <div class="form-group">
            <label for="cell"><i class="mdi mdi-whatsapp"></i> Whatsapp</label>
            <input type="text" class="form-control" data-toggle="input-mask"
                   data-mask-format="(00) 00000-0000" name="cell"
                   value="{{ old('cell') }}">
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
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                       id="customCheck1"
                       name="newsletter"
                       value="on" {{ old('newsletter') }}>
                <label class="custom-control-label" for="customCheck1">Desejo
                    receber
                    novidades de ofertas no meu e-mail.</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                       id="terms_of_use"
                       name="terms_of_use"
                       value="on" {{ old('terms_of_use') }} required="">
                <label class="custom-control-label" for="terms_of_use">Eu aceito os Termos de Uso.</label>
            </div>
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