@extends('admin.master.master')

@section('content-title', 'Publicados!')
@section('content-icon', 'file-check-alt')
@section('title-head', 'Blog')

@section('content-top-right')
    <div>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-info btn-rounded">
            <i class="uil-file-plus-alt"></i> Escrever
        </a>
        <a href="{{ route('admin.blog.trashed') }}" class="btn btn-danger btn-rounded">
            <i class="uil-trash-alt"></i> Lixeira
        </a>
    </div>
@endsection

@section('content')

    <div class="row">
        @if(isset($_GET['success']))
            <div class="col-12">
                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><i class="dripicons-checkmark mr-1"></i>Sucesso!</strong> O seu artigo foi publicado. — confira!
                </div>
            </div>
        @endif

        @if(count($posts) === 0)
            <div class="col-12">
                <div class="m-auto">
                    <div class="text-center">
                        <h3 class="m-0 font-weight-normal cta-box-title">Ooops! Não encontramos nenhum
                            <b>artigo</b> publicado. Que tal escrever um artigo?</h3>

                        <img class="my-3" src="{{ URL::asset('backend/assets/images/report.svg') }}" width="250"
                             alt="Generic placeholder image">

                        <br>

                        <a href="{{ route('admin.blog.create') }}" class="btn btn-md btn-success btn-rounded col-12 col-sm-10">Escrever
                            Artigo<i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @else
            @foreach($posts as $p)
                <div class="col-lg-6">
                    <div class="card">
                        <a href="{{ route('admin.blog.show', ['blog' => $p->uri]) }}" class="text-secondary">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4 text-center py-2">
                                    <img src="{{ Storage::url($p->cover) }}" class="avatar-sm rounded-circle" alt="..." style="width: 151px; height: 151px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" style="">
                                        <h5 class="card-title">{{ $p->title }}</h5>
                                        <p class="card-text">{{ $p->subtitle }}</p>
                                        <p class="card-text"><small class="text-muted">Última atualização em: {{ date('d/m/y H:i', strtotime($p->updated_at)) }}</small></p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end col -->
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection