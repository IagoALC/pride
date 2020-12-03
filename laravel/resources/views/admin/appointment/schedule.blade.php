@extends('admin.master.master')

@section('content-title', 'Agendar Consulta')
@section('content-icon', 'calendar-alt')
@section('title-head', 'Home')

@section('content')

    <div class="row">
        <div class="col-xl-6">
            <div class="">
                <div class="card-body">

                    <form action="{{ route('admin.consultas.store') }}" method="post">
                        @csrf

                        <div id="progressbarwizard">

                            <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                <li class="nav-item">
                                    <a href="#account-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span class="d-none d-sm-inline">Procedimento</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile mr-1"></i>
                                        <span class="d-none d-sm-inline">Data</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                        <span class="d-none d-sm-inline">Confirmação</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content b-0 mb-0">

                                <div id="bar" class="progress mb-3" style="height: 7px;">
                                    <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                         style="width: 0%;"></div>
                                </div>

                                <div class="tab-pane active" id="account-2">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <!-- Qual serviço deseja realizar -->
                                            <select class="form-control select2" data-toggle="select2" name="service">
                                                <option>Escolha o procedimento..</option>
                                                <optgroup label="Limpeza de Pele">
                                                    <option value="Serviço 1">Serviço 1</option>
                                                    <option value="Serviço 2">Serviço 2</option>
                                                </optgroup>
                                                <optgroup label="Espinhas">
                                                    <option value="Serviço 3">Serviço 3</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="profile-tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Dia</label>
                                                <div class="col-md-9">
                                                    <input id="day" name="day" type="date" class="form-control" data-date-format="d/m/yyyy" data-date-autoclose="true" value="{{ old('day') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname1"> Horário</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2" data-toggle="select2" name="time">
                                                        <option>Escolha o horário..</option>
                                                        <optgroup label="Manhã">
                                                            <option value="08:00">08:00</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                        </optgroup>
                                                        <optgroup label="Tarde">
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="17:00">17:00</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="finish-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                <h3 class="mt-0">Tudo certo !</h3>

                                                <p class="w-75 mb-2 mx-auto">Para confirmar seu agendamento, clique no botão abaixo!</p>

                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">Eu aceito os Termos de Uso.</label>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success">Agendar</button>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <ul class="list-inline mb-0 wizard">
                                    <li class="previous list-inline-item disabled">
                                        <a href="#" class="btn btn-info">Voltar</a>
                                    </li>
                                    <li class="next list-inline-item float-right">
                                        <a href="#" class="btn btn-info">Próximo</a>
                                    </li>
                                </ul>

                            </div> <!-- tab-content -->
                        </div> <!-- end #progressbarwizard-->
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('backend/assets/js/pages/demo.form-wizard.js') }}"></script>
@endsection