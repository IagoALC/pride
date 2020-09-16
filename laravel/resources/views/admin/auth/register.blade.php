@extends('admin.auth.auth-master')

@section('head-title', 'Registrar')
@section('head-description', 'Faça seu cadastro para acessar!')
@section('content-title', 'Todos os campos são obrigatórios para o cadastro.')

@section('scripts')
    <script>
        $(document).ready(() => {

            $('#prosseguir').click(() => {
                $('#fase1').attr('class', 'd-none')
                $('#fase2').attr('class', 'd-block')
                $('#progresso').attr('style', 'width: 50%;')
                $('#content-title').html('Estamos quase lá! Falta isso aqui ó -> 🤏')

                $('#fase1').attr('class', 'd-none')
                $('#fase2').attr('class', 'd-block')
            })

            $('#retroceder').click(() => {
                $('#fase1').attr('class', 'd-block')
                $('#fase2').attr('class', 'd-none')
                $('#progresso').attr('style', 'width: 1%;')
                $('#content-title').html('Todos os campos são obrigatórios para o cadastro.')
            })

            // $('#cadastrar').click(() => {
            //     $('#fase2').attr('class', 'd-none')
            //     $('#fase3').attr('class', 'd-block')
            //     $('#progresso').attr('style', 'width: 100%;')
            //
            //     $('#content-title').html('Um link de confirmação foi enviado para o seu e-mail.').attr('class', 'text-center')
            //     $('#sucesso').attr('class', 'd-none')
            // })
        })
    </script>
@endsection

@section('content')
    <!-- form -->
    <form action="#" method="post" autocomplete="off" class="needs-validation" novalidate>
        @csrf


        <div id="bar" class="progress mb-3" style="height: 7px;">
            <div id="progresso" class="bar progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 1%;"></div>
        </div>
        <div class="d-block" id="fase1">
            <div class="form-group position-relative">
                <label for="cpf">CPF</label><small>*</small>
                <input class="form-control" type="text" id="cpf" required="" placeholder="Informe seu CPF"
                       name="cpf" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="emailaddress">Email</label><small>*</small>
                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Informe seu email"
                       name="email">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Não vamos te enviar spam, cara! Preenche aí.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="password">Senha</label><small>*</small>
                <div class="input-group input-group-merge">
                    <input class="form-control" type="password" required="" id="password" placeholder="Informe sua senha"
                           name="password">
                    <div class="input-group-append" data-password="false">
                        <div class="input-group-text">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="confirm_pass">Repita sua senha</label><small>*</small>
                <div class="input-group input-group-merge">
                    <input class="form-control" type="password" required="" id="confirm_pass" placeholder="Repita sua senha"
                           name="password_confirmation">
                    <div class="input-group-append" data-password="false">
                        <div class="input-group-text">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Verifique se digitou a senha corretamente.
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox-newsletter" name="newsletter" value="newsletter">
                    <label class="custom-control-label" for="checkbox-newsletter">Aceito receber e-mails promocionais!</label>
                </div>
            </div>
            <div class="form-group mb-0 text-center">
                <span class="btn btn-danger btn-block" type="submit" id="prosseguir"><i class="mdi mdi-login"></i> Prosseguir</span>
            </div>
        </div>
        <div class="d-none" id="fase2">
            <div class="form-group position-relative">
                <label for="name">Primeiro nome</label><small>*</small>
                <input class="form-control" type="text" id="name" required="" placeholder="Informe seu primeiro nome"
                       name="first_name">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="last_name">Último nome</label><small>*</small>
                <input class="form-control" type="text" id="last_name" required="" placeholder="Informe seu último nome"
                       name="last_name">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="whatsapp">Whatsapp</label><small>*</small>
                <input class="form-control" type="text" required="" id="whatsapp" placeholder="Queremos te chamar no zap! 😏"
                       name="phone" data-toggle="input-mask" data-mask-format="(00) 0 0000-0000">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group position-relative">
                <label for="birth">Data de nascimento</label><small>*</small>
                <input class="form-control" type="text" required="" id="birth" placeholder="Quando você nasceu?"
                       name="birth" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                <div class="valid-tooltip">
                    Parece certo!
                </div>
                <div class="invalid-tooltip">
                    Ooops! Você precisa preencher este campo.
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox-terms" required="">
                    <label class="custom-control-label" for="checkbox-terms">Eu li e concordo com os <a href="#!">termos de privacidade.</a></label>
                </div>
            </div>
            <div class="form-group mb-0 text-center">
                <button id="cadastrar" class="btn btn-danger btn-block" type="submit"><i class="mdi mdi-send-check"></i> Cadastrar</button>
            </div>
            <div class="form-group mb-0 text-center">
                <button class="btn btn-block" id="retroceder"><i class="mdi mdi-arrow-left"></i> Retroceder</button>
            </div>
        </div>
        <div class="d-none" id="fase3">
            <div class="text-center">
                <h1 class="mt-0"><i class="mdi mdi-check-all"></i></h1>
                <h2 class="mt-0">Muito obrigado !</h2>
                <h4>Acesse o seu e-mail:</h4>
                <h3 class="mb-2 mt-1 mx-auto"><a href=""><img src="https://img.icons8.com/fluent/22/000000/gmail.png"/></a> - <a href=""><img src="https://img.icons8.com/color/22/000000/yahoo.png"/></a> - <a href=""><img src="https://img.icons8.com/color/22/000000/ms-outlook.png"/></a></h3>
            </div>
        </div>
        <!-- social-->
        <div id="sucesso" class="text-center mt-4">
            <p class="text-muted font-16">Já possuí uma conta? <a href="{{ route('auth.login') }}" class="text-muted ml-1"><b>Venha fazer
                        log in! 😄</b></a></p>
        </div>
    </form>
    <!-- end form-->
@endsection