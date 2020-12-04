@extends('dashboard.master.master')

@section('dashboard-content')
    <div class="col-lg-8">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <!-- Title + Filters-->
                <div class="d-sm-flex align-items-center justify-content-between pb-2">
                    <h1 class="h3 mb-3 text-center text-sm-left">Histórico de consultas</h1>

                    <form action="#" method="get">
                        @csrf
                        <div class="d-flex align-items-center mb-3">

                            <label class="text-nowrap pr-1 mr-2 mb-0">Ordenar consultas</label>
                            <select class="form-control custom-select custom-select-sm" id="filtro" name="filtro">
                                <option value="todas">Todas</option>
                                <option value="solicitada">Solicitadas</option>
                                <option value="confirmada">Confirmadas</option>
                                <option value="realizada">Realizadas</option>
                                <option value="cancelada">Canceladas</option>
                            </select>
                            <button type="submit" class="btn btn-outline-primary btn-sm ml-1">ir</button>
                        </div>
                    </form>

                </div>
                <!-- Accordion with orders-->
                <div class="accordion" id="orders-accordion">
                @if(Auth::user()->role != 'médico')
                    <!-- Primary alert -->
                        <div class="alert alert-primary" role="alert">
                            <i class="fe-clock font-size-xl mr-3"></i>
                            Reserve uma consulta <a href="#message-compose" data-toggle="collapse" class="alert-link">clicando
                                aqui</a>.
                        </div>
                        <!-- Message compose form-->
                        <div class="collapse" id="message-compose">
                            <form class="needs-validation box-shadow rounded mb-4"
                                  action="{{ route('dashboard.consultas.store') }}" method="post" name="consultasPost">
                                @csrf
                                <input type="hidden" name="status" value="confirmada">
                                <div class="d-flex align-items-center justify-content-between bg-dark rounded-top py-3 px-4">
                                    <h3 class="font-size-base text-light mb-0">Reserva uma consulta</h3><a
                                            class="close text-light" href="#message-compose"
                                            data-toggle="collapse">×</a>
                                </div>
                                <div class="p-4">
                                    <div class="form-group input-group-overlay cs-password-toggle">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                        class="fe-user"></i></span></div>
                                        <select class="fotm-control custom-select prepended-form-control" id="rf-space"
                                                name="servico" required=""
                                                id="servico">
                                            <option value="" selected>Escolha um serviço</option>
                                            <optgroup label="Novidades!">
                                                <option value="Tratamento de Calvíce">Tratamento de Calvíce</option>
                                                <option value="Mesoterapia Capilar">Mesoterapia Capilar</option>
                                            </optgroup>
                                            <optgroup label="Convencionais">
                                                <option value="Limpeza de Pele Profunda">Limpeza de Pele Profunda
                                                </option>
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
                                        <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                                    </div>
                                    <div class="form-group input-group-overlay cs-password-toggle">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                        class="fe-user"></i></span></div>
                                        <select class="fotm-control custom-select prepended-form-control" id="rf-space"
                                                name="medico" required=""
                                                id="servico">
                                            <option value="" selected>Escolha um médico</option>
                                            <optgroup label="Médicos">
                                                @foreach($medicos as $medico)
                                                    <option value="{{ $medico->id }}">{{ $medico->first_name }} {{ $medico->last_name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                        <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                                    </div>
                                    <!-- Min date + default date - Today -->
                                    <div class="form-group">
                                        <div class="input-group-overlay">
                                            <input class="form-control appended-form-control cs-date-picker flatpickr-input" name="reserva" id="reserva" type="hidden" placeholder="Escolha uma data / hora" data-datepicker-options="{&quot;enableTime&quot;: true, &quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;F j, Y H:i&quot;, &quot;dateFormat&quot;: &quot;Y-m-d H:i&quot;, &quot;minDate&quot;: &quot;today&quot;}" required=""><input class="form-control appended-form-control cs-date-picker input active" placeholder="Escolha uma data / hora" required="" tabindex="0" type="text" readonly="readonly">
                                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="fe-calendar"></i></span></div>
                                        </div>
                                    </div>

                                    @if(Auth::user()->role == 'cliente')
                                        <input type="hidden" value="{{ Auth::user()->document }}" name="cpf">
                                        <input type="hidden" value="{{ Auth::user()->email }}" name="email">
                                    @elseif(Auth::user()->role == 'admin')
                                        <div class="form-group input-group-overlay cs-password-toggle">
                                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                            class="fe-hexagon"></i></span></div>
                                            <input class="form-control prepended-form-control" type="text"
                                                   placeholder="CPF do cliente" name="cpf" id="format-custom"
                                                   required="">
                                            <div class="invalid-feedback">Please provide recipient(s) of your message!
                                            </div>
                                        </div>
                                        <div class="form-group input-group-overlay cs-password-toggle">
                                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                            class="fe-mail"></i></span></div>
                                            <input class="form-control prepended-form-control" type="email"
                                                   placeholder="Email do cliente" name="email" id="format-custom"
                                                   required="">
                                            <div class="invalid-feedback">Please provide recipient(s) of your message!
                                            </div>
                                        </div>
                                    @endif
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit"><i
                                                    class="fe-clock font-size-lg mr-2"></i>Reservar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                    @foreach($consultas as $consulta)
                        <script>
                            $(document).ready(function () {
                                var filtro = location.search.split('filtro=')[1];
                                console.log('funcionou');

                                if (filtro == 'todas') {
                                    const card = document.getElementById('{{ $consulta->id }}');
                                    card.className = 'card';
                                    console.log('o filtro é igual a todas');
                                }

                                if (filtro == '{{ $consulta->status }}') {
                                    const card = document.getElementById('{{ $consulta->id }}');
                                    card.className = 'card';
                                    console.log('consulta solicitada');
                                }
                            });
                        </script>
                        <!-- Order-->
                        <div class="card d-none" id="{{ $consulta->id }}">
                            <div class="card-header">
                                <div class="accordion-heading"><a
                                            class="d-flex flex-wrap align-items-center justify-content-between pr-4 collapsed"
                                            href="#consulta-{{ $consulta->code }}" role="button" data-toggle="collapse"
                                            aria-expanded="false" aria-controls="order-1">
                                        <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                    class="fe-hash font-size-base mr-1"></i><span
                                                    class="d-inline-block align-middle">{{ $consulta->code }}</span>
                                        </div>
                                        <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                            <i class="fe-clock text-muted mr-1"></i>{{ date('d/m/Y H:i', strtotime($consulta->date)) }}
                                        </div>
                                        <div class="bg-faded-info @if($consulta->status == 'agendada')text-warning @elseif($consulta->status == 'confirmada')text-info @elseif($consulta->status == 'realizada')text-success @elseif($consulta->status == 'cancelada')text-danger @endif font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                            {{ $consulta->status }}
                                        </div>
                                        <div class="text-body font-size-sm font-weight-medium my-1">R$ price</div>
                                    </a></div>
                            </div>
                            <div class="collapse" id="consulta-{{ $consulta->code }}" data-parent="#orders-accordion"
                                 style="">
                                <div class="card-body pt-4 border-top bg-secondary">
                                    <!-- Item-->
                                    <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                        <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3">
                                            <a class="d-table mx-auto"><img class="d-block rounded"
                                                                            width="105"
                                                                            src="{{ URL::asset('assets/img/dashboard/orders/01.jpg') }}"
                                                                            alt="Thumbnail"></a>
                                            <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                                <h5 class="nav-heading font-size-sm mb-2"><a
                                                    >{{ $consulta->service_id }}</a></h5>
                                                <div>
                                                    <span class="text-muted mr-1">Data:</span>{{ date('d/m/Y', strtotime($consulta->date)) }}
                                                </div>
                                                <div>
                                                    <span class="text-muted mr-1">Hora:</span>{{ date('H:i', strtotime($consulta->date)) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-between pt-3 border-top">
                                        <div class="font-size-sm my-2 mr-2"><span
                                                    class="text-muted mr-1">Paciente:</span><span
                                                    class="font-weight-medium">{{ $consulta->patient_id }}</span></div>
                                        <div class="font-size-sm my-2 mr-2"><span
                                                    class="text-muted mr-1">Médico:</span><span
                                                    class="font-weight-medium">{{ $consulta->doctor_id }}</span></div>
                                        @if(Auth::user()->role != 'cliente' AND $consulta->status == 'confirmada')
                                            <form action="{{ route('dashboard.consultas.realizada', ['consulta' => $consulta->id]) }}"
                                                  method="post">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-success">Marcar como realizada
                                                </button>
                                            </form>
                                        @elseif(Auth::user()->role == 'cliente' AND $consulta->status == 'confirmada')
                                            <div class="font-size-sm my-2">
                                                <form action="{{ route('dashboard.consultas.cancelar', ['consulta' => $consulta->id]) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="btn btn-danger">Cancelar consulta
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        // filtro
        $(document).ready(function () {
            console.log("ready!");
        });
    </script>
@endsection