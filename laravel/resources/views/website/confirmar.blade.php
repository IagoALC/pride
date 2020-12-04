@extends('master.master')

@section('page-content')
    <div class="container py-5 py-sm-6 py-md-7">
        <div class="row justify-content-center pt-4">
            <div class="col-lg-7 col-md-9 col-sm-11">
                <h1 class="h2 pb-3">Consulta solicitada com sucesso!</h1>
                <p class="font-size-sm">Confira as informações para confirmar a sua consulta.</p>
                <ul class="list-unstyled font-size-sm pb-1 mb-4">
                    <li><span class="text-primary font-weight-semibold mr-1">Código:</span>{{ $consulta->code }}</li>
                    <li><span class="text-primary font-weight-semibold mr-1">Serviço:</span>{{ $consulta->service_id }}</li>
                    <li><span class="text-primary font-weight-semibold mr-1">Data:</span>{{ date('d/m/Y', strtotime($consulta->date)) }}</li>
                    <li><span class="text-primary font-weight-semibold mr-1">Hora:</span>{{ date('H:i', strtotime($consulta->date)) }}</li>
                </ul>
                <div class="bg-secondary rounded-lg px-3 py-4 p-sm-4">
                    <form class="needs-validation p-2" novalidate="" action="{{ route('website.consultas.confirmar.put', ['consulta' => $consulta->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="form-label" for="consulta_confirmar">Digite "confirmar" para confirmar a sua consulta:</label>
                            <input class="form-control text-lowercase" type="text" required="" id="consulta_confirmar" name="consulta_confirmar">
                            <input type="hidden" name="consulta_id" value="{{ $consulta->id }}">
                            <div class="invalid-feedback">Please provide a valid email address!</div>
                        </div>
                        <button class="btn btn-primary col-12" type="submit">Confirmar minha consulta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection