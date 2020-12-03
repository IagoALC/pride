@extends('master.master')

@section('page-content')
    <!-- Hero-->
    <section class="jarallax bg-dark py-6 py-md-7" data-jarallax data-type="scale-opacity" data-speed="0.09">
        <div class="jarallax-img"
             style="background-image: url({{ URL::asset('assets/img/demo/coworking/hero-bg.jpg') }});"></div>
        <div class="container py-md-3">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="bg-light rounded-lg box-shadow-lg py-5 px-4">
                        <form class="py-sm-2 px-sm-3">
                            <h1 class="text-center mb-4">Reserve sua consulta</h1>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="rf-space">O que você quer fazer?</label>
                                    <select class="fotm-control custom-select" id="rf-space" name="servico" required=""
                                            id="servico">
                                        <option value="" selected>Escolha um serviço</option>
                                        <optgroup label="Novidades!">
                                            <option value="Tratamento de Calvíce">Tratamento de Calvíce</option>
                                            <option value="Mesoterapia Capilar">Mesoterapia Capilar</option>
                                        </optgroup>
                                        <optgroup label="Convencionais">
                                            <option value="Limpeza de Pele Profunda">Limpeza de Pele Profunda</option>
                                            <option value="Limpeza de Pele com Peeling">Limpeza de Pele com Peeling
                                            </option>
                                            <option value="Peeling">Peeling</option>
                                        </optgroup>
                                        <optgroup label="Espinhas">
                                            <option value="Peeling Químico">Peeling Químico</option>
                                            <option value="Limpeza de Pele">Limpeza de Pele</option>
                                            <option value="Luz Pulsada">Luz Pulsada</option>
                                        </optgroup>
                                        <optgroup label="Harmonização">
                                            <option value="Radiofrequência">Radiofrequência</option>
                                            <option value="Criolipólise">Criolipólise</option>
                                            <option value="Carboxiterapia">Carboxiterapia</option>
                                        </optgroup>
                                        <optgroup label="Acne">
                                            <option value="Peeling de Diamantes">Peeling de Diamantes</option>
                                            <option value="Peeling Químico">Peeling Químico</option>
                                            <option value="Limpeza de Pele">Limpeza de Pele</option>
                                        </optgroup>
                                        <optgroup label="Rugas">
                                            <option value="Laser de CO2 Fracionado">Laser de CO2 Fracionado</option>
                                            <option value="Preenchimento">Preenchimento</option>
                                            <option value="Lifting">Lifting</option>
                                        </optgroup>
                                        <optgroup label="Manchas">
                                            <option value="Dermaroller">Dermaroller</option>
                                            <option value="Ácido Retinóico">Ácido Retinóico</option>
                                            <option value="Luz Pulsada">Luz Pulsada</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="rf-date">Quando você quer fazer?</label>
                                    <div class="input-group-overlay">
                                        <input class="form-control appended-form-control cs-date-picker" name="reserva"
                                               id="reserva" type="text" placeholder="Escolha uma data / hora"
                                               data-datepicker-options="{&quot;enableTime&quot;: true, &quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;F j, Y H:i&quot;, &quot;dateFormat&quot;: &quot;Y-m-d H:i&quot;, &quot;minDate&quot;: &quot;today&quot;}"
                                               id="rf-date" required>
                                        <div class="input-group-append-overlay"><span class="input-group-text"><i
                                                        class="fe-calendar"></i></span></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="rf-company-size">Qual é o seu CPF?</label>
                                    <input class="form-control" type="text" name="CPF" placeholder="Informe o seu CPF"
                                           id="rf-company-size" required="">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="rf-email">Qual é o seu email?</label>
                                    <input class="form-control" type="email" name="email"
                                           placeholder="Informe o seu email" id="rf-email" required="">
                                </div>
                            </div>
                            <div class="row align-items-center pt-2">
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-1" required="">
                                        <label class="custom-control-label" for="ex-check-1">Li e concordo com os <a
                                                    href="#">termos e condições</a>.</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit">Reserve</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About (Services)-->
    <section class="container mt-4 pt-5 mt-md-2 pt-md-7 pb-6">
        <h2 class="text-center mb-3">Sobre a Pride</h2>
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-xl-6 col-lg-7">
                <p class="text-center mb-0">Eleita a melhor clínica de estética da américa latina por 3 anos
                    consecutivos, a Pride busca agora abrir o seu terceiro consultório localizado na Barra da
                    Tijuca.</p>
            </div>
        </div>
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                 data-carousel-options="{&quot;items&quot;: 4, &quot;controls&quot;: false, &quot;gutter&quot;: 15, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;410&quot;:{&quot;items&quot;:2}, &quot;580&quot;:{&quot;items&quot;:4}, &quot;740&quot;:{&quot;items&quot;: 4}}}">
                <div class="text-center"><img class="mb-3" width="54" src="{{ URL::asset('assets/img/demo/coworking/icons/cube.svg') }}"
                                              alt="Total Area"/>
                    <div class="text-muted" style="font-size: 2.25rem;">21</div>
                    <h3 class="h5">Procedimentos</h3>
                </div>
                <div class="text-center"><img class="mb-3" width="54" src="{{ URL::asset('assets/img/demo/coworking/icons/24-hours.svg') }}"
                                              alt="24/7 Access"/>
                    <div class="text-muted" style="font-size: 2.25rem;">24/7</div>
                    <h3 class="h5">Agendamento</h3>
                </div>
                <div class="text-center"><img class="mb-3" width="54" src="{{ URL::asset('assets/img/demo/coworking/icons/building.svg') }}"
                                              alt="3 Full Floors"/>
                    <div class="text-muted" style="font-size: 2.25rem;">3</div>
                    <h3 class="h5">Clínicas</h3>
                </div>
                <div class="text-center"><img class="mb-3" width="54" src="{{ URL::asset('assets/img/demo/coworking/icons/parking.svg') }}"
                                              alt="Parking"/>
                    <div class="text-muted" style="font-size: 2.25rem;">15</div>
                    <h3 class="h5">Vagas</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Virtual tour-->
    <section class="jarallax bg-dark py-7" data-jarallax data-speed="0.25">
        <div class="jarallax-img" style="background-image: url({{ URL::asset('assets/img/demo/coworking/virtual-tour-bg.jpg') }});"></div>
        <div class="container text-center py-md-5"><a class="d-inline-block bg-primary rounded-circle" href="#"><img
                        width="195" src="{{ URL::asset('assets/img/demo/coworking/icons/360-tour.svg') }}" alt="360 Tour Virtual"/></a></div>
    </section>
    <!-- Benefits-->
    <section class="container pb-5 pt-6 mb-md-2 py-md-7">
        <div class="row align-items-center">
            <div class="col-md-6"><img class="d-block mx-auto" src="{{ URL::asset('assets/img/demo/coworking/illustration01.svg') }}"
                                       alt="Illustration"/>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 pt-4 pt-md-0">
                <h2 class="mt-4 mb-5 text-center text-md-left">Nossos benefícios</h2>
                <div class="row">
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/tv.svg') }}"
                                                                                alt="Free computer"/>
                        <h5 class="h6">TV</h5>
                    </div>
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/sandwich.svg') }}"
                                                                                alt="Coffee and snacks"/>
                        <h5 class="h6">Café e lanches</h5>
                    </div>
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2 text-primary" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/console.svg') }}"
                                                                                alt="Relax zone"/>
                        <h5 class="h6">Relax zone</h5>
                    </div>
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/living-room.svg') }}"
                                                                                alt="Private meeting room"/>
                        <h5 class="h6">Sala privada</h5>
                    </div>
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/router.svg') }}"
                                                                                alt="High-speed internet"/>
                        <h5 class="h6">Wi-Fi</h5>
                    </div>
                    <div class="col-6 col-sm-4 text-center mb-grid-gutter"><img class="mb-2" width="46"
                                                                                src="{{ URL::asset('assets/img/demo/coworking/icons/open-book.svg') }}"
                                                                                alt="Educational programs"/>
                        <h5 class="h6">Revistas</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="container pb-5 mb-md-4 pb-md-7">
        <div class="row align-items-center">
            <div class="col-md-6 offset-lg-1 order-md-2"><img class="d-block mx-auto"
                                                              src="{{ URL::asset('assets/img/demo/coworking/illustration02.svg') }}"
                                                              alt="Illustration"/>
            </div>
            <div class="col-md-6 col-lg-5 order-md-1 pt-4 pt-md-0">
                <h2 class="mt-4 mb-5 text-center text-md-left">O que as pessoas falam sobre nós</h2>
                <div class="cs-carousel">
                    <div class="cs-carousel-inner"
                         data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20}">
                        <div class="pt-3">
                            <blockquote class="blockquote mx-1">
                                <p>Muito bom, senhores.</p>
                                <footer class="blockquote-footer">André Fogos</footer>
                            </blockquote>
                        </div>
                        <div class="pt-3">
                            <blockquote class="blockquote mx-1">
                                <p>Único defeito é não ter uma a cada esquina.</p>
                                <footer class="blockquote-footer">Sandro Barbosa</footer>
                            </blockquote>
                        </div>
                        <div class="pt-3">
                            <blockquote class="blockquote mx-1">
                                <p>Very attentive staff, I recommend!</p>
                                <footer class="blockquote-footer">Daniele</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events-->
    <section class="position-relative bg-gradient pt-6 pb-7" style="z-index: 2;">
        <div class="container pb-5">
            <h2 class="text-light text-center pb-1 mb-5">Últimas publicações</h2>
        </div>
    </section>
    <div class="bg-overlay-content container" style="margin-top: -150px;">
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                 data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;gutter&quot;: 23, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;800&quot;:{&quot;items&quot;:2}}}">
                <div class="pb-2">
                    <div class="card h-100 border-0 box-shadow mx-1"><span
                                class="badge badge-lg badge-floating badge-floating-right badge-success">Nova</span>
                        <div class="card-body py-5 px-4">
                            <div class="d-sm-flex py-sm-4 px-lg-3">
                                <div class="text-sm-center mt-0 mt-sm-n3"><span
                                            class="d-sm-block text-primary mr-2 mr-sm-0 mb-n3"
                                            style="font-size: 3.75rem;">03</span><span
                                            class="font-size-xl text-muted text-uppercase">Dez</span></div>
                                <div class="pl-sm-4 pl-lg-5"><a class="meta-link font-size-sm mb-2" href="#">Beleza</a>
                                    <h3 class="h4 nav-heading mb-4"><a href="#">Tratamento para cicatrizes sem cirurgia
                                            plástica</a></h3><a
                                            class="media meta-link font-size-sm align-items-center pt-2" href="#"><img
                                                class="rounded-circle" width="42" src="{{ URL::asset('assets/img/testimonials/02.jpg') }}"
                                                alt="Sanomi Smith"/>
                                        <div class="media-body pl-2 ml-1 mt-n1">por<span
                                                    class="font-weight-semibold ml-1">Eliza Maria</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="card h-100 border-0 box-shadow mx-1">
                        <div class="card-body py-5 px-4">
                            <div class="d-sm-flex py-sm-4 px-lg-3">
                                <div class="text-sm-center mt-0 mt-sm-n3"><span
                                            class="d-sm-block text-primary mr-2 mr-sm-0 mb-n3"
                                            style="font-size: 3.75rem;">28</span><span
                                            class="font-size-xl text-muted text-uppercase">Nov</span></div>
                                <div class="pl-sm-4 pl-lg-5"><a class="meta-link font-size-sm mb-2" href="#">Beleza</a>
                                    <h3 class="h4 nav-heading mb-4"><a href="#">Ácidos para a pele: descubra para que
                                            eles servem e como usar</a></h3><a
                                            class="media meta-link font-size-sm align-items-center pt-2" href="#"><img
                                                class="rounded-circle" width="42" src="{{ URL::asset('assets/img/testimonials/04.jpg') }}"
                                                alt="Charlie Welch"/>
                                        <div class="media-body pl-2 ml-1 mt-n1">por<span
                                                    class="font-weight-semibold ml-1">Ricardo Welch</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-2">
                    <div class="card h-100 border-0 box-shadow mx-1">
                        <div class="card-body py-5 px-4">
                            <div class="d-sm-flex py-sm-4 px-lg-3">
                                <div class="text-sm-center mt-0 mt-sm-n3"><span
                                            class="d-sm-block text-primary mr-2 mr-sm-0 mb-n3"
                                            style="font-size: 3.75rem;">22</span><span
                                            class="font-size-xl text-muted text-uppercase">Nov</span></div>
                                <div class="pl-sm-4 pl-lg-5"><a class="meta-link font-size-sm mb-2" href="#">Beleza</a>
                                    <h3 class="h4 nav-heading mb-4"><a href="#">Pele seca ou ressecada? Conheça as
                                            diferenças e tratamentos</a></h3><a
                                            class="media meta-link font-size-sm align-items-center pt-2" href="#"><img
                                                class="rounded-circle" width="42" src="{{ URL::asset('assets/img/testimonials/09.jpg') }}"
                                                alt="Jessica Miller"/>
                                        <div class="media-body pl-2 ml-1 mt-n1">por<span
                                                    class="font-weight-semibold ml-1">Jessica Leite</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacts-->
    <section class="bg-secondary" style="margin-top: -300px; padding-top: 300px;">
        <div class="container pt-5 pb-6 py-md-7">
            <h2 class="text-center mb-5">Entre em contato conosco</h2>
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <form class="needs-validation mb-4 pb-2" novalidate>
                        <div class="input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                            class="fe-user"></i></span></div>
                            <input class="form-control prepended-form-control" type="text" placeholder="Nome" required>
                        </div>
                        <div class="input-group-overlay form-group">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                            class="fe-mail"></i></span></div>
                            <input class="form-control prepended-form-control" type="email" placeholder="Email"
                                   required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Endereço</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-0">Av. das Américas 700, Barra da Tijuca</li>
                                <li class="mb-0">Rio de Janeiro, Brasil</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h5>Contato</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-0">+55 (21) 2269-0459</li>
                                <li class="mb-0">contato@pride.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1 cs-gallery"><a
                            class="cs-gallery-item cs-map-popup border rounded-lg"
                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua"
                            data-iframe="true"
                            data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;Av. das Américas 700, Barra da Tijuca, RJ&lt;/h6&gt;"><img
                                src="{{ URL::asset('assets/img/demo/coworking/map.jpg') }}" alt="Maps"/><span class="cs-gallery-caption"><i
                                    class="fe-maximize-2 font-size-xl mt-n1 mr-2"></i>Expandir o mapa</span>
                        <div class="position-absolute"
                             style="width: 48px; top: 50%; left: 50%; margin-top: -24px; margin-left: -24px;"><img
                                    src="{{ URL::asset('assets/img/pages/contacts/marker.png') }}" alt="Map marker"/>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
@endsection