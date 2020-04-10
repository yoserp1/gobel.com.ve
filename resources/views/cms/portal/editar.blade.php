@extends('layouts.dashboard')

@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection

@section('js_after')
    <!-- Page JS Plugins -->

    <!-- Page JS Code -->

@endsection

@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Datos del Portal</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Configuracion</li>
                    <li class="breadcrumb-item">Portal</li>
                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="{{ URL::to('cms/portal/guardar').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="{{ URL::to('cms/inicio') }}">
                    <i class="fa fa-arrow-left mr-1"></i> Volver
                </a>
                {{--<div class="block-options">
                    <div class="custom-control custom-switch custom-control-success">
                        <input type="checkbox" class="custom-control-input" id="dm-post-edit-active" name="dm-post-edit-active" checked>
                        <label class="custom-control-label" for="dm-post-edit-active">Set post as active</label>
                    </div>
                </div>--}}
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">

                        {{--
                        @if (count($errors) > 0)
                            <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                                <div class="flex-fill mr-3">
                                    <p class="mb-0">Hay problemas con su validacion!</p>
                                </div>
                                <div class="flex-00-auto">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </div>
                            </div>
                        @endif
                        --}}
                        @if( $errors->has('da_alert_form') )
                        <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                            <div class="flex-fill mr-3">
                                <p class="mb-0">{{ $errors->first('da_alert_form') }}</p>
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control {!! $errors->has('titulo') ? 'is-invalid' : '' !!}" id="titulo" name="titulo" placeholder="Titulo..." value="{{ empty(old('titulo'))? $data->nb_portal : old('titulo') }}" {{ $errors->has('titulo') ? 'aria-describedby="titulo-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('titulo') )
                                <div id="titulo-error" class="invalid-feedback animated fadeIn">{{ $errors->first('titulo') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">meta name="description"</label>
                            <input type="text" class="form-control {!! $errors->has('description') ? 'is-invalid' : '' !!}" id="description" name="description" placeholder="description..." value="{{ empty(old('description'))? $data->de_description : old('description') }}" {{ $errors->has('description') ? 'aria-describedby="description-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('description') )
                                <div id="description-error" class="invalid-feedback animated fadeIn">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="keywords">meta name="keywords"</label>
                            <input type="text" class="form-control {!! $errors->has('keywords') ? 'is-invalid' : '' !!}" id="keywords" name="keywords" placeholder="keywords..." value="{{ empty(old('keywords'))? $data->de_keywords : old('keywords') }}" {{ $errors->has('keywords') ? 'aria-describedby="keywords-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('keywords') )
                                <div id="keywords-error" class="invalid-feedback animated fadeIn">{{ $errors->first('keywords') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="author">meta name="author"</label>
                            <input type="text" class="form-control {!! $errors->has('author') ? 'is-invalid' : '' !!}" id="author" name="author" placeholder="author..." value="{{ empty(old('author'))? $data->de_author : old('author') }}" {{ $errors->has('author') ? 'aria-describedby="author-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('author') )
                                <div id="author-error" class="invalid-feedback animated fadeIn">{{ $errors->first('author') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="robots">meta name="robots"</label>
                            <input type="text" class="form-control {!! $errors->has('robots') ? 'is-invalid' : '' !!}" id="robots" name="robots" placeholder="robots..." value="{{ empty(old('robots'))? $data->de_robots : old('robots') }}" {{ $errors->has('robots') ? 'aria-describedby="robots-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('robots') )
                                <div id="robots-error" class="invalid-feedback animated fadeIn">{{ $errors->first('robots') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_title">meta property="og:title"</label>
                            <input type="text" class="form-control {!! $errors->has('og_title') ? 'is-invalid' : '' !!}" id="og_title" name="og_title" placeholder="og:title..." value="{{ empty(old('og_title'))? $data->de_og_title : old('og_title') }}" {{ $errors->has('og_title') ? 'aria-describedby="og_title-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_title') )
                                <div id="og_title-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_title') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_site_name">meta property="og:site_name"</label>
                            <input type="text" class="form-control {!! $errors->has('og_site_name') ? 'is-invalid' : '' !!}" id="og_site_name" name="og_site_name" placeholder="og:site_name..." value="{{ empty(old('og_site_name'))? $data->de_og_site_name : old('og_site_name') }}" {{ $errors->has('og_site_name') ? 'aria-describedby="og_site_name-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_site_name') )
                                <div id="og_site_name-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_site_name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_description">meta property="og:description"</label>
                            <input type="text" class="form-control {!! $errors->has('og_description') ? 'is-invalid' : '' !!}" id="og_description" name="og_description" placeholder="og:description..." value="{{ empty(old('og_description'))? $data->de_og_description : old('og_description') }}" {{ $errors->has('og_description') ? 'aria-describedby="og_description-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_description') )
                                <div id="og_description-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_description') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_type">meta property="og:type"</label>
                            <input type="text" class="form-control {!! $errors->has('og_type') ? 'is-invalid' : '' !!}" id="og_type" name="og_type" placeholder="og:type..." value="{{ empty(old('og_type'))? $data->de_og_type : old('og_type') }}" {{ $errors->has('og_type') ? 'aria-describedby="og_type-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_type') )
                                <div id="og_type-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_type') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_url">meta property="og:url"</label>
                            <input type="text" class="form-control {!! $errors->has('og_url') ? 'is-invalid' : '' !!}" id="og_url" name="og_url" placeholder="og:url..." value="{{ empty(old('og_url'))? $data->de_og_url : old('og_url') }}" {{ $errors->has('og_url') ? 'aria-describedby="og_url-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_url') )
                                <div id="og_url-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_url') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="og_image">meta property="og:image"</label>
                            <input type="text" class="form-control {!! $errors->has('og_image') ? 'is-invalid' : '' !!}" id="og_image" name="og_image" placeholder="og:image..." value="{{ empty(old('og_image'))? $data->de_og_image : old('og_image') }}" {{ $errors->has('og_image') ? 'aria-describedby="og_image-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('og_image') )
                                <div id="og_image-error" class="invalid-feedback animated fadeIn">{{ $errors->first('og_image') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="analytics">Codigo para seguimiento</label>
                            <textarea class="form-control" id="analytics" name="analytics" rows="3" placeholder="Codigo..">{{ empty(old('analytics'))? $data->de_analytics : old('analytics') }}</textarea>
                            <div class="form-text text-muted font-size-sm font-italic">La etiqueta de Analytics es un fragmento de JavaScript que recoge datos y los envía a Analytics desde un sitio web.</div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Favicon</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="shortcut_icon" name="shortcut_icon" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="shortcut_icon">Seleccione favicon...</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-fw fa-save mr-1"></i> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END New Post -->
</div>
<!-- END Page Content -->

@endsection