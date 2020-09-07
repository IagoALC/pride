<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <title>Pride Dashboard | SEO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{ url(mix('backend/assets/css/style.css')) }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
    
                <!-- LOGO -->
                <a href="index.blade.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo2.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm2.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.blade.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark2.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm_dark2.png" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="left-side-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navegação</li>

                        <li class="side-nav-item">
                            <a href="index.blade.php" class="side-nav-link">
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

                        
                        <li class="side-nav-title side-nav-item">Clínica</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Pessoas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Clientes</a>
                                </li>
                                <li>
                                    <a href="#!">Time</a>
                                </li>
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Tratamentos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Procedimentos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Clínicas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-title side-nav-item">Blog</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Posts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.html" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span class="badge badge-light float-right">Novo</span>
                                <span> Estatísticas </span>
                            </a>
                        </li>
            
                        <li class="side-nav-title side-nav-item mt-1">E-commerce</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Produtos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                                <li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Pedidos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                                <li>
                            </ul>
                        </li>

                        <li class="side-nav-title side-nav-item mt-1">Gerenciador</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> E-mail </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Ver Todos</a>
                                </li>
                                <li>
                                    <a href="#!">Criar Novo</a>
                                </li>
                                <li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Website </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="#!">Editar</a>
                                </li>
                                <li>
                                    <a href="#!">Requisitar</a>
                                </li>
                                <li>
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
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Pesquisar ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                                                <img src="assets/images/users/avatar-9.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Ver Tudo
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/avatar-2.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">João Vitor</span>
                                        <span class="account-position">Administrador</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bem-vindo !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                    <input type="text" class="form-control dropdown-toggle" placeholder="Pesquisar..." id="top-search">
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
                                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="32">
                                            <div class="media-body">
                                                <h5 class="m-0 font-14">Jacob Williams</h5>
                                                <span class="font-12 mb-0">Médico</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="media">
                                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-9.jpg" alt="Generic placeholder image" height="32">
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
                                    <h4 class="page-title"><i class="uil-dashboard"></i> Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-right'></i>
                                        <h6 class="<!--text-uppercase mt-0">Clientes ativos</h6>
                                        <h2 class="my-2" id="<!--active-users-count">121</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                            <span class="text-nowrap">Desde o último mês</span>  
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->

                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-bill float-right'></i>
                                        <h6 class="<!--text-uppercase mt-0">Procedimentos realizados</h6>
                                        <h2 class="my-2" id="<!--active-views-count">560</h2>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold <!--mdi-arrow-down-bold"></span> 1.08%</span>
                                            <span class="text-nowrap">Desde o último mês</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->

                                <div class="card cta-box overflow-hidden">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h3 class="m-0 font-weight-normal cta-box-title">Envie <b>emails</b> promocionais para clientes<i class="mdi mdi-arrow-right"></i></h3>
                                            </div>
                                            <img class="ml-3" src="assets/images/email-campaign.svg" width="92" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div> <!-- end col -->
                            
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="<!--text-uppercase mt-0"><i class='uil uil-bill mr-2'></i> Últimos procedimentos</h6>

                                            <table class="table table-sm table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Cliente</th>
                                                        <th>Médico</th>
                                                        <th>Procedimento</th>
                                                        <th>Status</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Afonso P.</td>
                                                        <td>Jacob W.</td>
                                                        <td>Limpeza de Pele</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rozangela V.</td>
                                                        <td>Jacob W.</td>
                                                        <td>Peeling</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Clara S.</td>
                                                        <td>Jacob W.</td>
                                                        <td>Peeling</td>
                                                        <td><i class="mdi mdi-circle text-danger"></i> Aguardando PG</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suely C.</td>
                                                        <td>Suellen C.</td>
                                                        <td>Acne</td>
                                                        <td><i class="mdi mdi-circle text-warning"></i> Agendado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ana P.</td>
                                                        <td>Suellen C.</td>
                                                        <td>Acne</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>João B.</td>
                                                        <td>Vera P.</td>
                                                        <td>Limpeza de Pele</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fernanda G.</td>
                                                        <td>Vera P.</td>
                                                        <td>Limpeza de Pele</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Clara S.</td>
                                                        <td>Vera P.</td>
                                                        <td>Acne</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Raquel V.</td>
                                                        <td>Jacob W.</td>
                                                        <td>Peeling</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Realizado</td>
                                                        <td>Ver</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">Modo Claro</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Modo Escuro</label>
                    </div>

                    <!-- Width -->
                    <h5 class="mt-4">Largura</h5>
                    <hr class="mt-1" />
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                        <label class="custom-control-label" for="fluid-check">Fluida</label>
                    </div>
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                        <label class="custom-control-label" for="boxed-check">Caixa</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Barra Lateral Esquerda</h5>
                    <hr class="mt-1" />
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check"
                            checked />
                        <label class="custom-control-label" for="default-check">Padrão</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="theme" value="light" id="light-check" />
                        <label class="custom-control-label" for="light-check">Claro</label>
                    </div>

                    <div class="custom-control custom-switch mb-3">
                        <input type="radio" class="custom-control-input" name="theme" value="dark" id="dark-check" />
                        <label class="custom-control-label" for="dark-check">Escuro</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="custom-control-label" for="fixed-check">Fixa</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="custom-control-label" for="condensed-check">Condensada</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="scrollable"
                            id="scrollable-check" />
                        <label class="custom-control-label" for="scrollable-check">Rolável</label>
                    </div>

                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Redefinir</button>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-analytics.js"></script>
        <!-- end demo js-->
    </body>

</html>