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
                            <label for="dm-post-edit-excerpt">Excerpt</label>
                            <textarea class="form-control" id="dm-post-edit-excerpt" name="dm-post-edit-excerpt" rows="3" placeholder="Enter an excerpt..">Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices.</textarea>
                            <div class="form-text text-muted font-size-sm font-italic">Visible on blog post list as a small description of the post.</div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Featured Image</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="dm-post-edit-image" name="dm-post-edit-image" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="dm-post-edit-image">Choose a new image</label>
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