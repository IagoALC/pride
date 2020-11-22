@extends('admin.master.master')

@section('content-title', 'Escrever novo...')
@section('content-icon', 'file-plus-alt')
@section('title-head', 'Blog - Escrever')

@section('css')
    <!-- SimpleMDE css -->
    <link href="{{ URL::asset('backend/assets/css/vendor/simplemde.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <script>
        $(document).ready(function() {
            $("#fileDiv").click(function(){
                $("#file").click();
            });
        });
    </script>

    <style>
        #file{position:absolute; top:-100px;}
    </style>
@endsection

@section('content-top-right')
    <div>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-info btn-rounded">
            <i class="uil-arrow-left"></i> Publicados
        </a>
    </div>
@endsection

@section('content')

    @if($errors->all())

            <div aria-live="polite" aria-atomic="true" style="float: right;position: relative; min-height: 200px;">
                <!-- Position it -->
                <div style="float: right; position: fixed; top: 15px; right: 15px; z-index: 99999; min-width: 300px;">
                @foreach($errors->all() as $error)
                    <!-- Then put toasts within -->
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                        <div class="toast-header">
                            <img src="{{ URL::asset('backend/assets/images/logo_sm.png') }}" alt="brand-logo" height="12" class="mr-1" />
                            <strong class="mr-auto">Pride</strong>
                            <small class="text-muted">agora</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            {{ $error }}
                        </div>
                    </div> <!--end toast-->
                    @endforeach
                </div>
            </div>

    @endif

    <form autocomplete="off" action="{{ route('admin.blog.store') }}"
          method="post" data-plugin="dropzone"
          data-previews-container="#file-previews"
          data-upload-preview-template="#uploadPreviewTemplate" id="myAwesomeDropzone"
          enctype="multipart/form-data" name="admin.blog.store">
        @csrf

        <div class="row">

            {{-- Title --}}
            <div class="col-12">
                <div class="form-group">
                    <label for="simpleinput">Qual é o <b>título</b> do seu artigo?</label>
                    <input type="text" id="simpleinput" class="form-control" placeholder="Dica: um bom título aumenta as chances do seu artigo ser aberto." maxlength="60" data-toggle="maxlength" data-threshold="20" data-placement="top" id="title" name="title" value="{{ old('title') }}">
                </div>
            </div>

            {{-- Subtitle --}}
            <div class="col-12">
                <div class="form-group">
                    <label for="simpleinput">Como será o <b>subtítulo</b>?</label>
                    <input type="text" id="simpleinput" class="form-control" placeholder="Dica: o subtítulo serve para dar aos leitores uma visão geral do que terá no conteúdo artigo." maxlength="191" data-toggle="maxlength" data-threshold="91" data-placement="top" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                </div>
            </div>

            {{-- Cover --}}
            <div class="col-12" id="fileDiv" onclick="getElementById('file').click()>
                <label for="simpleinput">Insira uma <b>imagem</b> para ser a capa do seu artigo.</label>
                <div class="dropzone">
                    <div class="">
                        <input type="file" id="file" name="files"/>
                    </div>

                    <div class="dz-message needsclick">
                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                        <h3>Solte imagens ou clique para upload.</h3>
                        <span class="text-muted font-13">Se você inserir multiplas imagens, somente a última será enviada.</span>
                    </div>
                </div>
                <small>*Formatos permitidos: JPEG, JPG e PNG. Tamanho máximo: 10mb.</small>
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
                                       class="text-muted font-weight-bold" data-dz-name></a>
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

            {{-- Content --}}
            <div class="col-12">
                <div class="form-group">
                    <label for="simpleinput">Vamos de <b>conteúdo</b>?</label>
                    <small>*Tamanho mínimo: 50 caracteres.</small>
                    <small>Para mais informações, leia o <a href="https://simplemde.com/markdown-guide">guia</a>.
                    </small>
                    <textarea id="simplemde1" name="text" placeholder="Comece a digitar ...">{{ old('text', '') }}</textarea>
                </div>
            </div>

            {{-- Categories --}}
            <div class="col-12">
                <label for="simpleinput">Coloque as <b>categorias</b> que se encaixam no tema do seu artigo.</label>
                <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple"
                        data-placeholder="Escolher ..." name="categories">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                    </optgroup>
                </select>
            </div>

            <div class="col-12 text-right my-2">
                <button type="submit" class="btn btn-success">
                    <i class="uil-file-check-alt"></i> Publicar
                </button>
            </div>

        </div>
    </form>

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