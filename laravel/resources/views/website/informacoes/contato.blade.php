@extends('master.master')

@section('page-content')
    <!-- Page title-->
    <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25"
             style="background-image: none;"><span class="bg-overlay bg-gradient" style="opacity: .8;"></span>

        <div class="container bg-overlay-content pt-3 pb-7 pt-md-0">
            <div class="row justify-content-center py-md-5">
                <div class="col-lg-6 col-md-8 text-center pt-2 mb-n3">
                    <h1 class="text-light">Contato</h1>
                    <p class="text-light">Entre em contato ou ligue para nós agora mesmo. Nós normalmente
                        respondemos em 2 dias úteis.</p>
                </div>
            </div>
        </div>
        <div id="jarallax-container-0"
             style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <div class="jarallax-img"
                 style="background-image: url('{{ URL::asset('assets/img/pages/contacts/page-title-bg.jpg') }}'); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1311px; height: 376.5px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -21.25px; transform: translate3d(0px, 41px, 0px);"
                 data-jarallax-original-styles="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
        </div>
    </section>
    <!-- Contact cards (details)-->
    <section class="container-fluid bg-overlay-content mb-5 mb-md-6" style="margin-top: -120px;">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100 border-0 box-shadow-lg py-4">
                    <div class="card-body text-center"><i class="fe-map-pin mb-4 text-primary"
                                                          style="font-size: 2.25rem;"></i>
                        <h3 class="h6 mb-2">Endereço, Localização</h3>
                        <p class="font-size-sm mb-2">Av. das Américas 700, Barra da Tijuca
                            Rio de Janeiro, Brasil</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100 border-0 box-shadow-lg py-4">
                    <div class="card-body text-center"><i class="fe-clock mb-4 text-danger"
                                                          style="font-size: 2.25rem;"></i>
                        <h3 class="h6 mb-2">Jornada de trabalho</h3>
                        <ul class="list-unstyled font-size-sm mb-0">
                            <li>Seg - Sex: 9AM - 8PM</li>
                            <li>Sab - Dom: 10AM - 5PM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100 border-0 box-shadow-lg py-4">
                    <div class="card-body text-center"><i class="fe-phone mb-4 text-success"
                                                          style="font-size: 2.25rem;"></i>
                        <h3 class="h6 mb-2">Números de telefone</h3>
                        <ul class="list-unstyled font-size-sm mb-0">
                            <li><span class="mr-1">Atendimento ao Cliente:</span><a class="nav-link-style">(21) 2269-0459</a></li>
                            <li><span class="mr-1">Suporte técnico:</span><a class="nav-link-style">(21) 2269-0458</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100 border-0 box-shadow-lg py-4">
                    <div class="card-body text-center"><i class="fe-mail mb-4 text-warning"
                                                          style="font-size: 2.25rem;"></i>
                        <h3 class="h6 mb-2">Endereço de e-mail</h3>
                        <ul class="list-unstyled font-size-sm mb-0">
                            <li><span class="mr-1">Atendimento ao Cliente:</span><a class="nav-link-style">contato@pride.com</a>
                            </li>
                            <li><span class="mr-1">Suporte técnico:</span><a class="nav-link-style">suporte@pride.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection