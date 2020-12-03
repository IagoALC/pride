@extends('admin.master.master')

@section('content-title', 'Consulta ' . $appointment->code)
@section('content-icon', 'calendar-alt')
@section('title-head', 'Home')

@section('content')

    <div class="row">
        @if(Auth::user()->role == 'doctor')
            <div class="col-12">
                <div class="card bg-success">
                    <div class="card-body profile-user-box">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media">
                                        <span class="float-left m-2 mr-4"><img src="{{ Storage::url(Auth::user()->cover )}}"
                                                                               style="height:100px;" alt=""
                                                                               class="rounded-circle img-thumbnail"></span>
                                        <div class="media-body">

                                            <h4 class="mt-1 mb-1 text-white">{{ $appointment->service_id }}</h4>
                                            <p class="font-13 text-white-50"> Nome completo do paciente</p>

                                            <ul class="mb-0 list-inline text-light">
                                                <li class="list-inline-item mr-3">
                                                    <h5 class="mb-1">N</h5>
                                                    <p class="mb-0 font-13 text-white-50">Idade</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-1">N</h5>
                                                    <p class="mb-0 font-13 text-white-50">Número de consultas</p>
                                                </li>
                                            </ul>
                                        </div> <!-- end media-body-->
                                    </div>
                                </div> <!-- end col-->

                                <div class="col-sm-4">
                                    <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                        <form action="{{ route('admin.consultas.done', ['consulta' => $appointment->code]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-light">
                                                <i class="mdi mdi-check-all mr-1"></i> Marcar como realizada
                                            </button>
                                        </form>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row -->
                    </div> <!-- end card-body/ profile-user-box-->
                </div>
            </div>
        @endif

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings">
                            <input type="hidden" name="_token" value="xtpNLDbkpRMQqHwoPIKlG3ONzMAbc9SpHT9n6mVB">                                <input type="hidden" name="_method" value="PUT">

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi  mdi-face-profile  mr-1"></i>
                                    Informações do Paciente</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Nome</label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Insira o seu primeiro nome" name="first_name" value="Nome do Paciente" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Último Nome</label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Insira o seu útlimo nome" name="last_name" value="Sobrenome do Paciente" disabled>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi  mdi-face-profile  mr-1"></i>
                                    Informações da Consulta</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Código</label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Insira o seu primeiro nome" name="first_name" value="{{ $appointment->code }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Status</label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Insira o seu útlimo nome" name="status" value="{{ $appointment->status }}" disabled>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Dia</label>
                                            <input type="text" class="form-control" id="day" placeholder="Insira o seu primeiro nome" name="day" value="{{ date('d/m/Y', strtotime($appointment->day)) }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Horário</label>
                                            <input type="text" class="form-control" id="time" placeholder="Insira o seu útlimo nome" name="time" value="{{ $appointment->time }}" disabled>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Serviço</label>
                                            <input type="text" class="form-control" id="service_id" name="service_id" value="{{$appointment->service_id }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Categoria</label>
                                            <input type="text" class="form-control" id="service_id" name="service_id" value="{{$appointment->service_id }}" disabled>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi  mdi-face-profile  mr-1"></i>
                                    Informações do Médico</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Nome</label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Insira o seu primeiro nome" name="first_name" value="Nome do médico" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Último Nome</label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Insira o seu útlimo nome" name="last_name" value="Sobrenome" disabled>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                </div>
                    </div>


                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('backend/assets/js/pages/demo.form-wizard.js') }}"></script>
@endsection