@extends('admin.master.master')

@section('content-title', 'Minha conta')
@section('content-icon', 'user')
@section('title-head', 'Minha conta')

@section('content')
    <div class="row">

        <div class="col-xl-8 col-lg-7">
            <!-- Messages-->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
                        Últimos Atendimentos</h5>
                    @if(isset($atendimentos))
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Clientes</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="assets/images/users/avatar-2.jpg" alt="table-user"
                                             class="mr-2 rounded-circle" height="24"> Halette Boivin
                                    </td>
                                    <td>App design and development</td>
                                    <td>01/01/2015</td>
                                    <td>10/15/2018</td>
                                    <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                             class="mr-2 rounded-circle" height="24"> Durandana Jolicoeur
                                    </td>
                                    <td>Coffee detail page - Main Page</td>
                                    <td>21/07/2016</td>
                                    <td>12/05/2018</td>
                                    <td><span class="badge badge-danger-lighten">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                             class="mr-2 rounded-circle" height="24"> Lucas Sabourin
                                    </td>
                                    <td>Poster illustation design</td>
                                    <td>18/03/2018</td>
                                    <td>28/09/2018</td>
                                    <td><span class="badge badge-success-lighten">Done</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="assets/images/users/avatar-6.jpg" alt="table-user"
                                             class="mr-2 rounded-circle" height="24"> Donatien Brunelle
                                    </td>
                                    <td>Drinking bottle graphics</td>
                                    <td>02/10/2017</td>
                                    <td>07/05/2018</td>
                                    <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                             class="mr-2 rounded-circle" height="24"> Karel Auberjo
                                    </td>
                                    <td>Landing page design - Home</td>
                                    <td>17/01/2017</td>
                                    <td>25/05/2021</td>
                                    <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="">
                            <div class="text-center">
                                <h3 class="m-0 font-weight-normal cta-box-title">Não encontramos nenhum
                                    <b>atendimento</b> nos nossos registros. Que tal agendar uma consulta?</h3>

                                <img class="my-3" src="{{ URL::asset('backend/assets/images/report.svg') }}" width="180"
                                     alt="Generic placeholder image">

                                <br>

                                <a href="javascript:void(0);" class="btn btn-md btn-success btn-rounded col-12">Agendar
                                    Consulta <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endif
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ Storage::url(Auth::user()->cover )}}"
                         class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                    <h4 class="mb-0 mt-2">{{ Auth::user()->first_name }}</h4>
                    <p class="text-muted font-14">{{ Auth::user()->occupation }}</p>

                    <div class="text-left mt-3">
                        <p class="text-muted mb-1 font-13"><strong>Nome :</strong> <span
                                    class="ml-2">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>CPF :</strong> <span
                                    class="ml-2">{{ Auth::user()->document }}</span></p>
                        <p class="text-muted mb-1 font-13"><strong>Email :</strong> <span
                                    class="ml-2 ">{{ Auth::user()->email }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Whatsapp :</strong><span
                                    class="ml-2">{{ Auth::user()->cell }}</span></p>
                        <p class="text-muted mb-1 font-13"><strong>Status :</strong> <span
                                    class="ml-2 @if(Auth::user()->status == 1) text-success @elseif(Auth::user()->status == 0) text-danger @endif"><b>@if(Auth::user()->status == 1)
                                        Ativo @elseif(Auth::user()->status == 0) Inativo @endif</b></span>
                        </p>
                        <a href="#settings" data-toggle="tab" aria-expanded="false"
                           class="btn btn-light btn-rounded col-12"><i
                                    class="uil uil-user-check"></i> Editar</a>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->

        </div> <!-- end col-->

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="settings">
                            <form autocomplete="off" action="{{ route('admin.myProfile.update', ['user'=>$user->id]) }}"
                                  method="post" data-plugin="dropzone"
                                  data-previews-container="#file-previews"
                                  data-upload-preview-template="#uploadPreviewTemplate" id="myAwesomeDropzone"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                @if(Auth::user()->role == 'Administrador')
                                    <div class="accordion custom-accordion" id="custom-accordion-one">
                                        <div class="card mb-0">
                                            <div class="" id="headingFour">
                                                <h5 class="text-uppercase bg-light p-2">
                                                    <a class="custom-accordion-title d-block text-secondary"
                                                       data-toggle="collapse" href="#collapseFour"
                                                       aria-expanded="false" aria-controls="collapseFour"><i
                                                                class="mdi mdi-account-badge mr-1"></i>
                                                        Administrativo <i
                                                                class="mdi mdi-chevron-down accordion-arrow"></i>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseFour" class="collapse hide"
                                                 aria-labelledby="headingFour"
                                                 data-parent="#custom-accordion-one">
                                                <div class="card-body">
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                                class="uil uil-user-plus mr-1"></i>
                                                        Perfil do Usuário

                                                        <div class="ml-0 ml-sm-5 d-sm-inline d-block mt-2 mt-sm-0">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio1" name="role"
                                                                       value="Administrador"
                                                                       class="custom-control-input" {{ (old('role') == 'Administrador' || old('role') == true || Auth::user()->role == 'Administrador' ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio1">Administrador</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio2" name="role"
                                                                       value="Atendente"
                                                                       class="custom-control-input" {{ (old('role') == 'Atendente' || old('role') == true || Auth::user()->role == 'Atendente' ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio2">Atendente</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio3" name="role"
                                                                       value="Médico"
                                                                       class="custom-control-input" {{ (old('role') == 'Médico' || old('role') == true || Auth::user()->role == 'Médico' ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio3">Médico</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio4" name="role"
                                                                       value="Cliente"
                                                                       class="custom-control-input" {{ (old('role') == 'Cliente' || old('role') == true || Auth::user()->role == 'Cliente' ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio4">Cliente</label>
                                                            </div>
                                                        </div>
                                                    </h5>

                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                                class="uil uil-lock-access mr-1"></i> Conceder Acesso

                                                        <div class="ml-0 ml-sm-5 d-sm-inline d-block mt-2 mt-sm-0">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="customCheck8" name="appointment"
                                                                       value="on" {{ (old('appointment') == 'on' || old('appointment') == true || Auth::user()->appointment == 1 ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customCheck8">Consultas</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="customCheck4" name="store"
                                                                       value="on" {{ (old('store') == 'on' || old('store') == true || Auth::user()->store == 1 ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customCheck4">E-commerce</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="customCheck5" name="blog"
                                                                       value="on" {{ (old('blog') == 'on' || old('blog') == true || Auth::user()->blog == 1 ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customCheck5">Blog</label>
                                                            </div>
                                                        </div>

                                                    </h5>

                                                    <div class="alert alert-info" role="alert">
                                                        <i class="dripicons-information mr-2"></i>A última <strong>atualização</strong>
                                                        do usuário foi em
                                                        <b>{{ @date('d/m/yy', strtotime(Auth::user()->updated_at)) }}</b>
                                                        às
                                                        <b>{{ @date('H:i', strtotime(Auth::user()->updated_at)) }}</b>.
                                                        O último login foi
                                                        em {{ date('d/m/Y', strtotime(Auth::user()->last_login_at)) }}
                                                        às {{ date('H:i', strtotime(Auth::user()->last_login_at)) }} com
                                                        o IP {{ Auth::user()->last_login_ip }}.
                                                    </div>

                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                                class="uil uil-user-plus mr-1"></i>
                                                        Status do Usuário

                                                        <div class="ml-5 d-sm-inline d-block mt-2 mt-sm-0">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio5" name="status"
                                                                       value="on"
                                                                       class="custom-control-input" {{ (old('status') == 'on' || Auth::user()->status == 1 ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio5">Ativo</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio6" name="status"
                                                                       value="off"
                                                                       class="custom-control-input" {{ (old('status') == 'off' || Auth::user()->status == 0 ? 'checked' : '') }}>
                                                                <label class="custom-control-label text-capitalize"
                                                                       for="customRadio6">Inativo</label>
                                                            </div>
                                                        </div>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>


                                        @endif

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                    class="mdi @if(Auth::user()->genre == 'male') mdi-face-profile @else mdi-face-profile-woman @endif mr-1"></i>
                                            Informações Pessoais</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">Primeiro Nome</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                           placeholder="Insira o seu primeiro nome" name="first_name"
                                                           value="{{ old('first_name') ?? Auth::user()->first_name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">Último Nome</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                           placeholder="Insira o seu útlimo nome" name="last_name"
                                                           value="{{ old('last_name') ?? Auth::user()->last_name }}">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-select">Sexo</label>
                                                    <select class="form-control" id="example-select" name="genre">
                                                        <optgroup label="Escolher...">
                                                            <option value="female" {{ (old('genre') == 'female' || Auth::user()->genre == 'female' ? 'selected' : '') }}>
                                                                Feminino
                                                            </option>
                                                            <option value="male" {{ (old('genre') == 'male' || Auth::user()->genre == 'male' ? 'selected' : '') }}>
                                                                Masculino
                                                            </option>
                                                            <option value="unknow" {{ (old('genre') == 'unknow' || Auth::user()->genre == 'unknow' ? 'selected' : '') }}>
                                                                Prefiro não dizer
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control" data-toggle="input-mask"
                                                           data-mask-format="000.000.000-00" data-reverse="true"
                                                           name="document"
                                                           value="{{ old('document') ?? Auth::user()->document }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="rg">RG</label>
                                                    <input type="text" class="form-control" id="rg"
                                                           name="document_secondary"
                                                           value="{{ old('document_secondary') ?? Auth::user()->document_secondary }}">
                                                    <span class="form-text text-muted"><small>Não insira pontos (.) ou hifen (-).</small></span>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Orgão Expedidor</label>
                                                    <input type="text" class="form-control"
                                                           name="document_secondary_complement"
                                                           value="{{ old('document_secondary_complement') ?? Auth::user()->document_secondary_complement }}">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date_of_birth">Data de Nascimento</label>
                                                    <input id="date_of_birth" name="date_of_birth" type="text"
                                                           class="form-control" data-provide="datepicker"
                                                           data-date-format="dd/mm/yyyy" data-date-autoclose="true"
                                                           value="{{ old('date_of_birth') ?? Auth::user()->date_of_birth }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="place_of_birth">Naturalidade</label>
                                                    <input type="text" class="form-control" id="place_of_birth"
                                                           name="place_of_birth"
                                                           value="{{ old('place_of_birth') ?? Auth::user()->place_of_birth }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- File Upload -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input type="file" id="file" name="file" multiple/>
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                        <h3>Solte imagens ou clique para upload.</h3>
                                                        <span class="text-muted font-13">Se você inserir multiplas imagens, somente a última será enviada.</span>
                                                    </div>
                                                </div>
                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                <!-- file preview template -->
                                                <div class="d-none" id="uploadPreviewTemplate">
                                                    <div class="card mt-1 mb-0 shadow-none border">
                                                        <div class="p-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <img data-dz-thumbnail src="#"
                                                                         class="avatar-sm rounded bg-light" alt="">
                                                                </div>
                                                                <div class="col pl-0">
                                                                    <a href="javascript:void(0);"
                                                                       class="text-muted font-weight-bold"
                                                                       data-dz-name></a>
                                                                    <p class="mb-0" data-dz-size></p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <!-- Button -->
                                                                    <a href="" class="btn btn-link btn-lg text-muted"
                                                                       data-dz-remove>
                                                                        <i class="dripicons-cross"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                    class="mdi mdi-office-building mr-1"></i> Endereço</h5>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cep">CEP</label>
                                                    <input type="text" class="form-control" data-toggle="input-mask"
                                                           data-mask-format="00000-000" id="cep" name="zipcode"
                                                           value="{{ old('zipcode') ?? Auth::user()->zipcode }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="state">Estado</label>
                                                    <select id="state" name="state" class="form-control select2"
                                                            data-toggle="select2">
                                                        <option selected>Selecione</option>
                                                        <optgroup label="Estados">
                                                            <option value="AC" {{ (old('state') == 'AC' || Auth::user()->state == 'AC' ? 'selected' : '') }}>
                                                                Acre
                                                            </option>
                                                            <option value="AL" {{ (old('state') == 'AL' || Auth::user()->state == 'AL' ? 'selected' : '') }}>
                                                                Alagoas
                                                            </option>
                                                            <option value="AP" {{ (old('state') == 'AP' || Auth::user()->state == 'AP' ? 'selected' : '') }}>
                                                                Amapá
                                                            </option>
                                                            <option value="AM" {{ (old('state') == 'AM' || Auth::user()->state == 'AM' ? 'selected' : '') }}>
                                                                Amazonas
                                                            </option>
                                                            <option value="BA" {{ (old('state') == 'BA' || Auth::user()->state == 'BA' ? 'selected' : '') }}>
                                                                Bahia
                                                            </option>
                                                            <option value="CE" {{ (old('state') == 'CE' || Auth::user()->state == 'CE' ? 'selected' : '') }}>
                                                                Ceará
                                                            </option>
                                                            <option value="DF" {{ (old('state') == 'DF' || Auth::user()->state == 'DF' ? 'selected' : '') }}>
                                                                Distrito Federal
                                                            </option>
                                                            <option value="ES" {{ (old('state') == 'ES' || Auth::user()->state == 'ES' ? 'selected' : '') }}>
                                                                Espírito Santo
                                                            </option>
                                                            <option value="GO" {{ (old('state') == 'GO' || Auth::user()->state == 'GO' ? 'selected' : '') }}>
                                                                Goiás
                                                            </option>
                                                            <option value="MA" {{ (old('state') == 'MA' || Auth::user()->state == 'MA' ? 'selected' : '') }}>
                                                                Maranhão
                                                            </option>
                                                            <option value="MT" {{ (old('state') == 'MT' || Auth::user()->state == 'MT' ? 'selected' : '') }}>
                                                                Mato Grosso
                                                            </option>
                                                            <option value="MS" {{ (old('state') == 'MS' || Auth::user()->state == 'MS' ? 'selected' : '') }}>
                                                                Mato Grosso do Sul
                                                            </option>
                                                            <option value="MG" {{ (old('state') == 'MG' || Auth::user()->state == 'MG' ? 'selected' : '') }}>
                                                                Minas Gerais
                                                            </option>
                                                            <option value="PA" {{ (old('state') == 'PA' || Auth::user()->state == 'PA' ? 'selected' : '') }}>
                                                                Pará
                                                            </option>
                                                            <option value="PB" {{ (old('state') == 'PB' || Auth::user()->state == 'PB' ? 'selected' : '') }}>
                                                                Paraíba
                                                            </option>
                                                            <option value="PR" {{ (old('state') == 'PR' || Auth::user()->state == 'PR' ? 'selected' : '') }}>
                                                                Paraná
                                                            </option>
                                                            <option value="PE" {{ (old('state') == 'PE' || Auth::user()->state == 'PE' ? 'selected' : '') }}>
                                                                Pernambuco
                                                            </option>
                                                            <option value="PI" {{ (old('state') == 'PI' || Auth::user()->state == 'PI' ? 'selected' : '') }}>
                                                                Piauí
                                                            </option>
                                                            <option value="RJ" {{ (old('state') == 'RJ' || Auth::user()->state == 'RJ' ? 'selected' : '') }}>
                                                                Rio de Janeiro
                                                            </option>
                                                            <option value="RN" {{ (old('state') == 'RN' || Auth::user()->state == 'RN' ? 'selected' : '') }}>
                                                                Rio Grande do Norte
                                                            </option>
                                                            <option value="RS" {{ (old('state') == 'RS' || Auth::user()->state == 'RS' ? 'selected' : '') }}>
                                                                Rio Grande do Sul
                                                            </option>
                                                            <option value="RO" {{ (old('state') == 'RO' || Auth::user()->state == 'RO' ? 'selected' : '') }}>
                                                                Rondônia
                                                            </option>
                                                            <option value="RR" {{ (old('state') == 'RR' || Auth::user()->state == 'RR' ? 'selected' : '') }}>
                                                                Roraima
                                                            </option>
                                                            <option value="SC" {{ (old('state') == 'SC' || Auth::user()->state == 'SC' ? 'selected' : '') }}>
                                                                Santa Catarina
                                                            </option>
                                                            <option value="SP" {{ (old('state') == 'SP' || Auth::user()->state == 'SP' ? 'selected' : '') }}>
                                                                São Paulo
                                                            </option>
                                                            <option value="SE" {{ (old('state') == 'SE' || Auth::user()->state == 'SE' ? 'selected' : '') }}>
                                                                Sergipe
                                                            </option>
                                                            <option value="TO" {{ (old('state') == 'TO' || Auth::user()->state == 'TO' ? 'selected' : '') }}>
                                                                Tocantins
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="city">Cidade</label>
                                                    <input type="text" class="form-control" name="city" id="city"
                                                           value="{{ old('city') ?? Auth::user()->city }}">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="street">Endereço</label>
                                                    <input type="text" class="form-control" name="street" id="street"
                                                           value="{{ old('street') ?? Auth::user()->street }}">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="text" class="form-control" name="number"
                                                           value="{{ old('number') ?? Auth::user()->number }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <input type="text" class="form-control" name="complement"
                                                           value="{{ old('complement') ?? Auth::user()->complement }}">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" name="neighborhood"
                                                           value="{{ old('neighborhood') ?? Auth::user()->neighborhood }}">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i>
                                            Contato
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-fb">Residencial</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="mdi mdi-phone"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="input-mask"
                                                               data-mask-format="(00) 0000-0000" name="telephone"
                                                               value="{{ old('telephone') ?? Auth::user()->telephone }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-tw">Whatsapp</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="mdi mdi-whatsapp"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="input-mask"
                                                               data-mask-format="(00) 00000-0000" name="cell"
                                                               value="{{ old('cell') ?? Auth::user()->cell }}">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        {{-- Acesso --}}
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                    class="mdi mdi-account mr-1"></i> Acesso
                                        </h5>

                                        <div class="row">

                                            {{-- E-mail --}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-fb">E-mail</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="mdi mdi-email"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control" name="email"
                                                               value="{{ old('email') ?? Auth::user()->email }}">
                                                    </div>
                                                    @if(Auth::user()->email_verified_at == true)
                                                        <span class="form-text text-success"><small>E-mail verificado!</small></span>
                                                    @else
                                                        <span class="form-text text-danger"><small>E-mail não verificado!</small></span>
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- Senha --}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-tw">Senha</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="mdi mdi-lock"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" name="password"
                                                               value="{{ old('password') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="customCheck1"
                                                           name="newsletter"
                                                           value="on" {{ (old('newsletter') == 'on' || old('newsletter') == true || Auth::user()->newsletter == 1 ? 'checked' : '') }}>
                                                    <label class="custom-control-label" for="customCheck1">Desejo
                                                        receber
                                                        novidades de ofertas no meu e-mail.</label>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success mt-2"><i
                                                        class="mdi mdi-content-save"></i> Salvar
                                            </button>
                                        </div>
                                    </div>
                            </form>
                            </form>
                            <!-- end settings content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
    </div>
@endsection

@section('js')
    <!-- plugin js -->
    <script src="{{ URL::asset('backend/assets/js/vendor/dropzone.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('backend/assets/js/ui/component.fileupload.js') }}"></script>
@endsection