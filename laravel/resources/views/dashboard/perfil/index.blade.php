@extends('dashboard.master.master')

@section('dashboard-content')
    <div class="col-lg-8">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <!-- Title + Delete link-->
                    <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                        <h1 class="h3 mb-2 text-nowrap">Informação do perfil</h1>
                        @if(Auth::user()->role == 'admin')
                            @if(Auth::user()->status == 1)
                                <form action="{{ route('dashboard.perfil.desativar', ['perfil' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <button class="btn btn-link text-danger font-weight-medium btn-sm mb-2" type="submit"><i
                                                class="fe-trash-2 font-size-base mr-2"></i>Desativar conta</button>
                                </form>
                            @else
                                <form action="{{ route('dashboard.perfil.reativar', ['perfil' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <button class="btn btn-link text-success font-weight-medium btn-sm mb-2" type="submit"><i
                                                class="fe-activity font-size-base mr-2"></i>Reativar conta</button>
                                </form>
                            @endif
                        @endif
                    </div>

                <form action="{{ route('dashboard.perfil.update', ['perfil' => $user->id]) }}" method="post"
                      enctype="multipart/form-data">
                @csrf
                @method('put')
                    <!-- Content-->
                    <div class="bg-secondary rounded-lg p-4 mb-4">
                        <div class="media d-block d-sm-flex align-items-center"><img
                                    class="d-block rounded-circle mx-auto mb-3 mb-sm-0" width="110"
                                    src="{{ Storage::url(Auth::user()->cover) }}"
                                    alt="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                            <div class="media-body pl-sm-3 text-center text-sm-left">
                                <input id="cover" type="file" name="cover" class="btn btn-light box-shadow btn-sm mb-2 d-none">
                                <label for="cover" class="btn btn-light box-shadow btn-sm mb-2"><i
                                            class="fe-refresh-cw mr-2"></i>Trocar avatar
                                </label>

                                <div id="cover-name" class="p mb-0 font-size-ms text-muted">Upload JPG, JFIF ou PNG. 300 x 300 recomendado.
                                </div>
                                <script>
                                    var $input = document.getElementById('cover'),
                                        $coverName = document.getElementById('cover-name');

                                    $input.addEventListener('change', function () {
                                        $coverName.textContent = this.value;
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-fn">Primeiro Nome</label>
                                <input class="form-control" type="text" id="account-fn" name="first_name"
                                       value="{{ old('first_name') ?? Auth::user()->first_name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-ln">Último Nome</label>
                                <input class="form-control" type="text" id="account-ln" name="last_name"
                                       value="{{ old('last_name') ?? Auth::user()->last_name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-email">Email</label>
                                <input class="form-control" type="text" id="account-email" name="email"
                                       value="{{ old('email') ?? Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="document">CPF</label>
                                <input class="form-control" type="text" id="document" name="document"
                                       value="{{ old('document') ?? Auth::user()->document }}"
                                       data-mask-format="000.000.000-00">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone">Telefone</label>
                                <input class="form-control" type="text" id="telephone" name="telephone"
                                       value="{{ old('telephone') ?? Auth::user()->telephone }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cell">Whatsapp</label>
                                <input class="form-control" type="text" id="cell" name="cell"
                                       value="{{ old('cell') ?? Auth::user()->cell }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Nova senha</label>
                                <input class="form-control" type="password" id="password" name="password"
                                       value="{{ old('password') }}" placeholder="Digite a nova senha">
                            </div>
                        </div>
                        @if(Auth::user()->role == 'admin')
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="role">Perfil</label>
                                    <select class="custom-select" id="role" name="role">
                                        <option value="cliente" {{ (old('role') == 'cliente' || Auth::user()->role == 'cliente' ? 'selected' : '') }}>
                                            Cliente
                                        </option>
                                        <option value="médico" {{ (old('role') == 'médico' || Auth::user()->role == 'médico' ? 'selected' : '') }}>
                                            Médico
                                        </option>
                                        <option value="admin" {{ (old('role') == 'admin' || Auth::user()->role == 'admin' ? 'selected' : '') }}>
                                            Administrador
                                        </option>
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="col-12">
                            <hr class="mt-2 mb-4">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="show-email" value="on"
                                           {{ (old('newsletter') == 'on' || old('newsletter') == true || Auth::user()->newsletter == 1 ? 'checked' : '') }} name="newsletter">
                                    <label class="custom-control-label" for="show-email">Desejo receber ofertas no meu
                                        email</label>
                                </div>
                                <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i
                                            class="fe-save font-size-lg mr-2"></i>Salvar mudanças
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection