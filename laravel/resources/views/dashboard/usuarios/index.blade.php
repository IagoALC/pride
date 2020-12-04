@extends('dashboard.master.master')

@section('dashboard-content')
    <div class="col-lg-8">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <!-- Title + Compose button-->
                <div class="d-sm-flex align-items-center justify-content-between pb-2 text-center text-sm-left">
                    <h1 class="h3 mb-3 text-nowrap">Usuários<span class="d-inline-block align-middle bg-faded-success text-success font-size-ms font-weight-medium rounded-sm py-1 px-2 ml-2">{{ $contagemUsuarios }}</span></h1>
                    <div class="mb-3"><a class="btn btn-translucent-primary" href="#message-compose" data-toggle="collapse"><i class="fe-plus mr-2"></i>Cadastrar</a></div>
                </div>
                <!-- Message compose form-->
                <div class="collapse" id="message-compose">
                    <form class="needs-validation box-shadow rounded mb-4" action="{{ route('dashboard.usuarios.store') }}" method="post" name="cadastrarPost">
                        @csrf
                        <div class="d-flex align-items-center justify-content-between bg-dark rounded-top py-3 px-4">
                            <h3 class="font-size-base text-light mb-0">Novo usuário</h3><a class="close text-light" href="#message-compose" data-toggle="collapse">×</a>
                        </div>
                        <div class="p-4">
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-user"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Primeiro nome" name="firstName" required="">
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-user"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Último nome" name="lastName" required="">
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-hexagon"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="CPF" name="document" id="format-custom" required="">
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-mail"></i></span></div>
                                <input class="form-control prepended-form-control" type="email" placeholder="Email" name="email" required="">
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-lock"></i></span></div>
                                <input class="form-control prepended-form-control" type="password" placeholder="Senha" name="password" required="">
                                <label class="cs-password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                            class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Mostrar senha</span>
                                </label>
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-viber"></i></span></div>
                                <input class="form-control prepended-form-control" type="text" placeholder="Whatsapp" name="cell" required="">
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="form-group input-group-overlay cs-password-toggle">
                                <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-key"></i></span></div>
                                <select class="custom-select prepended-form-control" id="role" name="role">
                                    <option value="cliente" {{ old('role') }} selected>
                                        Cliente
                                    </option>
                                    <option value="médico" {{ old('role') }}>
                                        Médico
                                    </option>
                                    <option value="admin" {{ old('role') }}>
                                        Administrador
                                    </option>
                                </select>
                                <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit"><i class="fe-user-plus font-size-lg mr-2"></i>Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Toolbar-->
                <div class="d-flex align-items-center justify-content-between bg-secondary py-2 px-3">
                    <div class="py-1">
                        <div class="custom-control custom-checkbox">
                            <span class="mr-3"><label class="fe-award mr-1"></label> Administrador</span>
                            <span class="mr-3"><label class="fe-heart mr-1"></label> Médico</span>
                            <span class="mr-3"><label class="fe-user mr-1"></label> Cliente</span>
                        </div>
                    </div>
                </div>
                <!-- Message list (table)-->
                <table class="table table-hover border-bottom">
                    <tbody id="message-list">
                        @foreach($users as $user)
                            <!-- Message-->
                            <tr id="item-message-1">
                                <td class="py-3 align-middle" style="width: 2.5rem;">
                                    <div class="pl-2">
                                        <label class="@if($user->role == 'admin')fe-award @elseif($user->role == 'médico')fe-heart @elseif($user->role == 'cliente')fe-user @endif"></label>
                                    </div>
                                </td>
                                <td class="py-3 align-middle"><a class="media d-block d-sm-flex align-items-center text-decoration-none" href="{{ route('dashboard.usuarios.show', ['usuario' => $user->id]) }}"><img class="rounded-circle mb-2 mb-sm-0" width="42" src="{{ Storage::url($user->cover) }}" alt="{{ $user->first_name }} {{ $user->last_name }}">
                                        <div class="media-body font-size-sm pl-sm-3">
                                            <div class="d-sm-flex text-heading align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="text-truncate font-weight-semibold" style="max-width: 10rem;">{{ $user->first_name }} {{ $user->last_name }}</div>@if($user->status == 1)<span class="nav-indicator">@endif</span>
                                                </div>
                                                <div class="ml-sm-auto text-muted font-size-xs">{{ date('d/m/Y', strtotime($user->created_at)) }}</div>
                                            </div>
                                            <div class="pt-1 text-heading">{{ $user->email }}</div>
                                        </div></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection