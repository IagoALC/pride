<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Pride | Clínica de Estética</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Pride - Sinta o orgulho de ser quem você é.">
    <meta name="keywords"
          content="beleza, saúde, orgulho, pride, auto-estima, procedimentos estéticos, consultas, agendamento, clínicas de estética, serviços, tratamentos">
    <meta name="author" content="Equipe GRIT">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .cs-page-loading.active > .cs-page-loading-inner {
            opacity: 1;
        }

        .cs-page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #737491;
        }

        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #766df4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.cs-page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{ URL::asset('assets/vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ URL::asset('assets/vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen"
          href="{{ URL::asset('assets/vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ URL::asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ url(mix('assets/css/theme.min.css')) }}">
    {{-- Jquery--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager-->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->
<body>
<div class="ajax_response"></div>
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Page loading spinner-->
<div class="cs-page-loading active">
    <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div>
        <span>Carregando...</span>
    </div>
</div>
<main class="cs-page-wrapper">
    <!-- Sign In Modal-->
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="cs-view show" id="modal-signin-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">Entrar</h4>
                        <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="font-size-ms text-muted">Faça login em sua conta usando o e-mail e a senha fornecidos
                            durante o registro.</p>
                        <form class="needs-validation" action="{{ route('auth.entrarPost') }}" method="post" name="entrarPost">
                            @csrf

                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-mail"></i></span></div>
                                <input class="form-control prepended-form-control" type="email" placeholder="Email"
                                       name="email" required="">
                            </div>
                            <div class="input-group-overlay cs-password-toggle form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-lock"></i></span></div>
                                <input class="form-control prepended-form-control" type="password" placeholder="Senha"
                                       name="password" required="">
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                            class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Mostrar senha</span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center form-group"><a
                                        class="nav-link-style font-size-ms" href="#">Esqueceu sua senha?</a>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                            <p class="font-size-sm pt-3 mb-0">Não tem uma conta? <a href='#' class='font-weight-medium'
                                                                                    data-view='#modal-signup-view'>Cadastrar</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-view" id="modal-signup-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">Cadastrar</h4>
                        <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="font-size-ms text-muted">O registro leva menos de um minuto, mas oferece controle
                            total sobre suas consultas.</p>
                        <form class="needs-validation" action="{{ route('auth.cadastrar.post') }}" method="post" name="cadastrarPost" >
                            @csrf

                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-user"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Primeiro nome" name="firstName" required="">
                            </div>
                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-user"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Último nome" name="lastName" required="">
                            </div>
                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-hexagon"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="CPF" name="document" required="">
                            </div>
                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-mail"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Email" name="email" required="">
                            </div>
                            <div class="input-group-overlay cs-password-toggle form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-lock"></i></span></div>
                                <input class="form-control prepended-form-control" type="password" placeholder="Senha" name="password" required="">
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                            class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Mostrar senha</span>
                                </label>
                            </div>
                            <div class="input-group-overlay cs-password-toggle form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-lock"></i></span></div>
                                <input class="form-control prepended-form-control" type="password" placeholder="Confirmar senha" name="confirm_password" required="">
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                            class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Mostrar senha</span>
                                </label>
                            </div>
                            <div class="input-group-overlay form-group">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-viber"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Whatsapp" name="cell" required="">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                            <p class="font-size-sm pt-3 mb-0">Já tem uma conta? <a href='#' class='font-weight-medium'
                                                                                   data-view='#modal-signin-view'>Entrar</a>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- WHEN fazer cadastro com redes sociais
                <div class="modal-body text-center px-4 pt-2 pb-4">
                  <hr>
                  <p class="font-size-sm font-weight-medium text-heading pt-4">Or sign in with</p><a class="social-btn sb-facebook sb-lg mx-1 mb-2" href="#"><i class="fe-facebook"></i></a><a class="social-btn sb-twitter sb-lg mx-1 mb-2" href="#"><i class="fe-twitter"></i></a><a class="social-btn sb-instagram sb-lg mx-1 mb-2" href="#"><i class="fe-instagram"></i></a><a class="social-btn sb-google sb-lg mx-1 mb-2" href="#"><i class="fe-google"></i></a>
                </div>
                -->
            </div>
        </div>
    </div>
    <!-- Navbar (Solid background)-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="cs-header navbar navbar-expand-lg navbar-light navbar-sticky" data-scroll-header>
        <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas"
                    data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{ route('website.home') }}"><img
                        class="d-none d-lg-block" width="153" src="{{ URL::asset('assets/img/logo/logo-dark.png') }}"
                        alt="Pride"/><img
                        class="d-lg-none" width="58" src="{{ URL::asset('assets/img/logo/logo-icon.png') }}"
                        alt="Pride"/></a>
            <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
                @if(Auth::check())
                    <div class="navbar-tool dropdown"><a class="navbar-tool-icon-box" href="{{ route('dashboard.perfil.edit', ['perfil' => Auth::user()->id]) }}"><img
                                    class="navbar-tool-icon-box-img" src="{{ Storage::url(Auth::user()->cover ) }}"
                                    alt="Avatar"></a><a class="navbar-tool-label dropdown-toggle"
                                                        href="{{ route('dashboard.perfil.edit', ['perfil' => Auth::user()->id]) }}">
                            <small>Olá,</small>
                            {{ Auth::user()->first_name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right" style="width: 15rem;">
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.consultas.index') }}"><i
                                            class="fe-shopping-bag font-size-base opacity-60 mr-2"></i>Consultas<span
                                            class="ml-auto font-size-xs text-muted">2</span></a></li>
                            <li class="dropdown-divider"></li>

                            @if(Auth::user()->role == 'admin')
                                <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.usuarios.index') }}"><i
                                                class="fe-users font-size-base opacity-60 mr-2"></i>Usuários<span
                                                class="ml-auto font-size-xs text-muted">{{ $contagemUsuarios }}</span></a></li>
                                <li class="dropdown-divider"></li>
                            @endif

                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.perfil.edit', ['perfil' => Auth::user()->id]) }}"><i
                                            class="fe-user font-size-base opacity-60 mr-2"></i>Informação do perfil @if(Auth::user()->status == 1)<span
                                            class="nav-indicator"></span>@endif</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"><i
                                            class="fe-log-out font-size-base opacity-60 mr-2"></i>Sair</a></li>
                        </ul>
                    </div>
                @else
                    <a
                            class="nav-link-style font-size-sm text-nowrap" href="#modal-signin" data-toggle="modal"
                            data-view="#modal-signin-view"><i class="fe-user font-size-xl mr-2"></i>Entrar</a>
                    <a
                            class="btn btn-primary ml-grid-gutter d-none d-lg-inline-block" href="#modal-signin"
                            data-toggle="modal" data-view="#modal-signup-view">Cadastrar</a>
                @endif
            </div>
            <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
                <div class="cs-offcanvas-cap navbar-box-shadow">
                    <h5 class="mt-1 mb-0">Menu</h5>
                    <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="cs-offcanvas-body">
                    <!-- Menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-toggle="dropdown">Serviços</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Novidades</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tratamento de Calvíce</a></li>
                                        <li><a class="dropdown-item" href="#">Mesoterapia Capilar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Convencionais</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Limpeza de Pele Profunda</a></li>
                                        <li><a class="dropdown-item" href="#">Limpeza de Pele com Peeling</a></li>
                                        <li><a class="dropdown-item" href="#">Peeling</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Espinhas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Peeling Químico</a></li>
                                        <li><a class="dropdown-item" href="#">Limpeza de Pele</a></li>
                                        <li><a class="dropdown-item" href="#">Luz Pulsada</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Harmonização</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Radiofrequência</a></li>
                                        <li><a class="dropdown-item" href="#">Criolipólise</a></li>
                                        <li><a class="dropdown-item" href="#">Carboxiterapia</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Acne</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Peeling de Diamantes</a></li>
                                        <li><a class="dropdown-item" href="#">Peeling Químico</a></li>
                                        <li><a class="dropdown-item" href="#">Limpeza de Pele</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Rugas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Laser de CO2 Fracionado</a></li>
                                        <li><a class="dropdown-item" href="#">Preenchimento</a></li>
                                        <li><a class="dropdown-item" href="#">Lifting</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                        data-toggle="dropdown">Manchas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Dermaroller</a></li>
                                        <li><a class="dropdown-item" href="#">Ácido Retinóico</a></li>
                                        <li><a class="dropdown-item" href="#">Luz Pulsada</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                         data-toggle="dropdown">Informações</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="font-size-xl text-muted"><i class="fe-file-text"></i></div>
                                            <div class="pl-3"><span class="d-block text-heading">Sobre</span>
                                                <small class="d-block text-muted">Saiba mais sobre a clínica</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="font-size-xl text-muted"><i class="fe-mic"></i></div>
                                            <div class="pl-3"><span class="d-block text-heading">Contato</span>
                                                <small class="d-block text-muted">Canais de comunicação</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="font-size-xl text-muted"><i class="fe-edit"></i></div>
                                            <div class="pl-3"><span class="d-block text-heading">Centro de Ajuda</span>
                                                <small class="d-block text-muted">Atualizações regulares</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="mailto:contato@pride.com">
                                        <div class="d-flex align-items-center">
                                            <div class="font-size-xl text-muted"><i class="fe-life-buoy"></i></div>
                                            <div class="pl-3"><span class="d-block text-heading">Suporte</span>
                                                <small class="d-block text-muted">contato@pride.com</small>
                                            </div>
                                        </div>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    @yield('page-content')
</main>
<footer class="site-footer bg-dark py-5">
    <div class="container d-sm-flex justify-content-between align-items-center text-center">
        <div class="mb-4 mb-sm-0 ml-sm-4 order-sm-2"><a class="social-btn sb-outline sb-light sb-facebook" href="#"><i
                        class="fe-facebook"></i></a><a class="social-btn sb-outline sb-light sb-twitter ml-2"
                                                       href="#"><i class="fe-twitter"></i></a><a
                    class="social-btn sb-outline sb-light sb-google ml-2" href="#"><i class="fe-instagram"></i></a>
        </div>
        <p class="font-size-sm mb-0 order-sm-1"><span class="text-light opacity-50 mr-1">© Todos os direitos reservados. Feito com <i
                        class="fe-heart"></i> em</span><a class="nav-link-style nav-link-light"
                                                          href="https://www.santoinacio-rio.com.br" target="_blank"
                                                          rel="noopener">Colégio Santo Inácio</a>.</p>
    </div>
</footer>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Topo</span><i
            class="btn-scroll-top-icon fe-arrow-up"> </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="{{ URL::asset('assets/vendor/jquery/dist/jquery.slim.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/lg-zoom.js/dist/lg-zoom.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/shufflejs/dist/shuffle.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<!-- Main theme script-->
<script src="{{ URL::asset('assets/js/theme.min.js') }}"></script>
<!-- Registro script-->
<script src="{{ URL::asset('assets/js/register.js') }}"></script>
</body>
</html>