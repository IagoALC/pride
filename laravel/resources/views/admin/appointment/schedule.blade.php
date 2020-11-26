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
                                        <span class="d-none d-sm-inline">Confirmação</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                        <span class="d-none d-sm-inline">Termos</span>
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
                                            <select class="form-control select2" data-toggle="select2">
                                                <option>Escolha o procedimento..</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="profile-tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> First name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name1" name="name1" class="form-control"
                                                           value="Francis">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname1"> Last name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="surname1" name="surname1"
                                                           class="form-control" value="Brinkman">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="email1">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="email1" name="email1" class="form-control"
                                                           value="cory1979@hotmail.com">
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
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                    Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                    dui. Aliquam
                                                    mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">I agree
                                                            with the Terms and Conditions</label>
                                                    </div>
                                                </div>
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