<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <title>@yield('title-head') | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('backend/assets/images/favicon.ico') }}">

    <!-- css -->
    <link href="{{ url(mix('backend/assets/css/icons.css')) }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url(mix('backend/assets/css/vendor.css')) }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url(mix('backend/assets/css/app-dark.css')) }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url(mix('backend/assets/css/app.css')) }}" rel="stylesheet" type="text/css"/>


</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <!-- LOGO -->
        <a href="index.blade.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('backend/assets/images/logo.png') }}" alt="" height="26">
                    </span>
            <span class="logo-sm">
                        <img src="{{ URL::asset('backend/assets/images/logo_sm.png') }}" alt="" height="26">
                    </span>
        </a>

        <!-- LOGO -->
        <a href="{{ route('admin.home') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('backend/assets/images/logo-dark.png') }}" alt="" height="26">
                    </span>
            <span class="logo-sm">
                        <img src="{{ URL::asset('backend/assets/images/logo_sm_dark.png') }}" alt="" height="26">
                    </span>
        </a>

        <div class="h-100" id="left-side-menu-container" data-simplebar>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav">

                <li class="side-nav-title side-nav-item">Navegação</li>

                <li class="side-nav-item">
                    <a href="{{ route('admin.home') }}" class="side-nav-link">
                        <i class="uil-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="#!" class="side-nav-link">
                        <i class="uil-dashboard"></i>
                        <span> Ver site </span>
                    </a>
                </li>


                <li class="side-nav-title side-nav-item">Blog</li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> aa </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="#!">consultas</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <!-- Help Box
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
            </div>
            end Help Box -->
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Pesquisar ..."
                                       aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Limpar</small>
                                                </a>
                                            </span>Notificação
                                </h5>
                            </div>

                            <div style="max-height: 230px;" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Jacob Williams curtiu seu
                                        <b>post</b>
                                        <small class="text-muted">1 min atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-9.jpg" class="img-fluid rounded-circle"
                                             alt=""/></div>
                                    <p class="notify-details">Maria Eduarda</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! que ux de dashboard incrivel</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">Novo usuário registrado.
                                        <small class="text-muted">5 horas atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Jacob Williams comentou no Blog
                                        <small class="text-muted">1 dia atrás</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                               class="dropdown-item text-center text-primary notify-item notify-all">
                                Ver Tudo
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-view-apps noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false"
                           aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{ Storage::url(Auth::user()->cover )}}"
                                             alt="user-image" class="rounded-circle">
                                    </span>
                            <span>
                                        <span class="account-user-name">Olá, {{ Auth::user()->first_name }}</span>
                                        <span class="account-position">{{ Auth::user()->role }}</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bem-vindo !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('admin.myProfile') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle mr-1"></i>
                                <span>Minha conta</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit mr-1"></i>
                                <span>Configurações</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy mr-1"></i>
                                <span>Suporte</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline mr-1"></i>
                                <span>Bloquear</span>
                            </a>

                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>Sair</span>
                            </a>

                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="app-search dropdown d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control dropdown-toggle" placeholder="Pesquisar..."
                                   id="top-search">
                            <span class="mdi mdi-magnify search-icon"></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Pesquisar</button>
                            </div>
                        </div>

                    </form>

                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Encontrado <span class="text-danger">5</span> resultados</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-notes font-16 mr-1"></i>
                            <span>Relatório de Análise</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-life-ring font-16 mr-1"></i>
                            <span>Como eu posso te ajudar?</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-cog font-16 mr-1"></i>
                            <span>Configurações de usuário</span>
                        </a>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Usuários</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="media">
                                    <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-3.jpg"
                                         alt="Generic placeholder image" height="32">
                                    <div class="media-body">
                                        <h5 class="m-0 font-14">Jacob Williams</h5>
                                        <span class="font-12 mb-0">Médico</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="media">
                                    <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-9.jpg"
                                         alt="Generic placeholder image" height="32">
                                    <div class="media-body">
                                        <h5 class="m-0 font-14">Maria Eduarda</h5>
                                        <span class="font-12 mb-0">Administrador</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <!--
                            <div class="page-title-right">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                        <i class="mdi mdi-autorenew"></i>
                                    </a>
                                </form>
                            </div>
                            -->
                            <h4 class="page-title"><i class="uil-@yield('content-icon')"></i> @yield('content-title')
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                @yield('content')

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2018 - 2020 © Pride - Todos os direitos reservados
                    </div>
                    <!--
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Configurações</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar>

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> o esquema de cores geral, menu lateral, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Esquema de Cor</h5>
            <hr class="mt-1"/>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                       id="light-mode-check" checked/>
                <label class="custom-control-label" for="light-mode-check">Modo Claro</label>
            </div>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                       id="dark-mode-check"/>
                <label class="custom-control-label" for="dark-mode-check">Modo Escuro</label>
            </div>

            <!-- Width -->
            <h5 class="mt-4">Largura</h5>
            <hr class="mt-1"/>
            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked/>
                <label class="custom-control-label" for="fluid-check">Fluida</label>
            </div>
            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check"/>
                <label class="custom-control-label" for="boxed-check">Caixa</label>
            </div>

            <!-- Left Sidebar-->
            <h5 class="mt-4">Barra Lateral Esquerda</h5>
            <hr class="mt-1"/>
            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check"
                       checked/>
                <label class="custom-control-label" for="default-check">Padrão</label>
            </div>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="light" id="light-check"/>
                <label class="custom-control-label" for="light-check">Claro</label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="radio" class="custom-control-input" name="theme" value="dark" id="dark-check"/>
                <label class="custom-control-label" for="dark-check">Escuro</label>
            </div>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                       checked/>
                <label class="custom-control-label" for="fixed-check">Fixa</label>
            </div>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="condensed"
                       id="condensed-check"/>
                <label class="custom-control-label" for="condensed-check">Condensada</label>
            </div>

            <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="scrollable"
                       id="scrollable-check"/>
                <label class="custom-control-label" for="scrollable-check">Rolável</label>
            </div>

            <button class="btn btn-primary btn-block mt-4" id="resetBtn">Redefinir</button>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
<!-- /Right-bar -->

<!-- bundle -->
<script src="{{ url(mix('backend/assets/js/vendor.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>


@hasSection('js')
    @yield('js')
@endif

</body>

</html>