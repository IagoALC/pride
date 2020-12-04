@extends('master.master')

@section('page-content')
    <div class="container py-5 py-sm-6 py-md-7">
        <div class="row justify-content-center pt-4">
            <div class="col-lg-7 col-md-9 col-sm-11">
                <h1 class="h2 pb-3">Esqueceu sua senha?</h1>
                <p class="font-size-sm">Altere sua senha em três etapas fáceis. Isso ajuda a manter sua nova senha segura.</p>
                <ul class="list-unstyled font-size-sm pb-1 mb-4">
                    <li><span class="text-primary font-weight-semibold mr-1">1.</span>Preencha seu endereço de email abaixo.</li>
                    <li><span class="text-primary font-weight-semibold mr-1">2.</span>Enviaremos a você um código temporário por e-mail.</li>
                    <li><span class="text-primary font-weight-semibold mr-1">3.</span>Use o código para alterar sua senha em nosso site seguro.</li>
                </ul>
                <div class="bg-secondary rounded-lg px-3 py-4 p-sm-4">
                    <form class="needs-validation p-2" novalidate="">
                        <div class="form-group">
                            <label class="form-label" for="recovery-email">Insira o seu endereço de email</label>
                            <input class="form-control" type="email" required="" id="recovery-email">
                            <div class="invalid-feedback">Por favor, forneça um endereço de e-mail válido!</div>
                        </div>
                        <button class="btn btn-primary" type="submit">Criar uma nova senha</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection