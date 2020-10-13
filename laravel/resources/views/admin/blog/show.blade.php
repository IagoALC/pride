@foreach ($post as $p)

@extends('admin.master.master')

@section('content-title', "$p->title")
@section('content-icon', 'file-search-alt')
@section('title-head', 'Blog - Escrever')

@section('content-top-right')
    <div>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-info btn-rounded">
            <i class="uil-arrow-left"></i> Publicados
        </a>
        <a href="{{ route('admin.blog.edit', ['blog' => $p->uri]) }}" class="btn btn-dark btn-rounded" tabindex="0" data-toggle="popover" data-trigger="hover" title="" data-content="Para fazer editar ou deletar o seu artigo." data-original-title="Configurações">
            <i class="uil-cog"></i> Configurações
        </a>
    </div>
@endsection

@section('content')


        <h1 class="text-center">{{ $p->title }}</h1>
        <h5 class="text-center mt-2">{{ $p->title }}</h5>
        <img src="{{ Storage::url($p->cover) }}" class="img-fluid mt-3">
        <p class="text-center mt-4">{{ $p->content }}</p>

@endsection

@section('js')
    <!-- plugin js -->
    <script src="{{ URL::asset('backend/assets/js/vendor/dropzone.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('backend/assets/js/ui/component.fileupload.js') }}"></script>

    <!-- SimpleMDE js -->
    <script src="{{ URL::asset('backend/assets/js/vendor/simplemde.min.js') }}"></script>
    <!-- SimpleMDE demo -->
    <script src="{{ URL::asset('backend/assets/js/pages/demo.simplemde.js') }}"></script>
@endsection

@endforeach