<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>@yield('head-title') | Pride - Sinta o orgulho de ser quem você é!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="@yield('head-description')" name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    
    <link href="{{ url(mix('backend/assets/css/icons.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(mix('backend/assets/css/app-dark.css')) }}" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="{{ url(mix('backend/assets/css/app.css')) }}" rel="stylesheet" type="text/css" id="light-style" />
    <link rel="stylesheet" href="{{ url(mix('backend/assets/scss/boot.scss')) }}"/>

    {{-- Jquery--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('scripts')
</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center">
                    <a href="#!" class="logo-dark text-center ml-lg-5">
                        <span><img src="{{ URL::asset('backend/assets/images/logo-dark.png') }}" alt="" height="30"></span>
                    </a>
                    <a href="#!" class="logo-light">
                        <span><img src="{{ URL::asset('backend/assets/images/logo.png') }}" alt="" height="30"></span>
                    </a>
                </div>

                <!-- title-->
                <p class="text-muted mb-2 mt-3" id="content-title">@yield('content-title')</p>

                @yield('content')

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="small"><a href="#!" class="text-muted ml-1">Desenvolvido por <b>Equipe GRIT</b></a> <br> © <?= date('Y') ?> - Todos os Direitos Reservados</p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> Sinta o orgulho de ser quem você é. <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>
                - Nosso slogan. Nosso estilo de vida!
            </p>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- bundle -->
<script src="{{ url(mix('backend/assets/js/vendor.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
@yield('js')

</body>

</html>