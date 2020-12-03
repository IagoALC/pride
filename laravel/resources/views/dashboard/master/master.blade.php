@extends('master.master')

@section('page-content')
    <!-- Slanted background-->
    <div class="position-relative bg-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content-->
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <!-- Sidebar-->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-light rounded-lg box-shadow-lg">
                    <div class="px-4 py-4 mb-1 text-center"><img class="d-block rounded-circle mx-auto my-2" width="110"
                                                                 src="{{ Storage::url(Auth::user()->cover) }}"
                                                                 alt="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                        <h6 class="mb-0 pt-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6><span class="text-muted font-size-sm">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2"
                                                                    href="#account-menu" data-toggle="collapse"><i
                                    class="fe-menu mr-2"></i>Menu da conta</a></div>
                    <div class="d-lg-block collapse pb-2" id="account-menu">
                        <h3 class="d-block bg-secondary font-size-sm font-weight-semibold text-muted mb-0 px-4 py-3">
                            Dashboard</h3><a class="d-flex align-items-center nav-link-style px-4 py-3 {{ @isActive('dashboard.consultas.index') }}"
                                             href="{{ route('dashboard.consultas.index') }}"><i
                                    class="fe-shopping-bag font-size-lg opacity-60 mr-2"></i>Consultas<span
                                    class="text-muted font-size-sm font-weight-normal ml-auto">2</span></a>

                        <a class="d-flex align-items-center nav-link-style px-4 py-3 {{ @isActive('dashboard.consultas.index') }}"
                           href="{{ route('dashboard.consultas.index') }}"><i
                                    class="fe-calendar font-size-lg opacity-60 mr-2"></i>Histórico<span
                                    class="text-muted font-size-sm font-weight-normal ml-auto">2</span></a>

                        @if(Auth::user()->role == 'admin')
                            <h3 class="d-block bg-secondary font-size-sm font-weight-semibold text-muted mb-0 px-4 py-3">
                                Ferramentas</h3><a
                                    class="d-flex align-items-center nav-link-style px-4 py-3 border-top {{ @isActive('dashboard.usuarios.index') }}"
                                    href="{{ route('dashboard.usuarios.index') }}"><i class="fe-users font-size-lg opacity-60 mr-2"></i>Usuários<span
                                        class="text-muted font-size-sm font-weight-normal ml-auto">{{ $contagemUsuarios }}</span></a>
                        @endif

                        <h3 class="d-block bg-secondary font-size-sm font-weight-semibold text-muted mb-0 px-4 py-3">
                            Configurações da conta</h3><a class="d-flex align-items-center nav-link-style px-4 py-3 {{ @isActive('dashboard.perfil.edit') }}"
                                                          href="{{ route('dashboard.perfil.edit', ['perfil' => Auth::user()->id]) }}"><i
                                    class="fe-user font-size-lg opacity-60 mr-2"></i>Informação do perfil @if(Auth::user()->status == 1)<span
                                    class="nav-indicator"></span>@endif</a>
                        <div class="d-flex align-items-center border-top">
                            <div class="ml-auto px-3">
                            </div>
                        </div>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="{{ route('logout') }}"><i
                                    class="fe-log-out font-size-lg opacity-60 mr-2"></i>Sair</a>
                    </div>
                </div>
            </div>
            <!-- Content-->
            @yield('dashboard-content')
        </div>
    </div>
@endsection