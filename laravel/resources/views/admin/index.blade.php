@extends('admin.master.master')

@section('content-title', 'Dashboard')
@section('content-icon', 'dashboard')

@section('content')
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
                        <img class="ml-3" src="{{ URL::asset('backend/assets/images/email-campaign.svg') }}" width="92" alt="Generic placeholder image">
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
@endsection