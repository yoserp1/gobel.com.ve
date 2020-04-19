@extends('layouts.dashboard')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/js/plugins/flatpickr/flatpickr.min.css') }}">

@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Page JS Helpers (Flatpickr + CKEditor plugins) -->
    <script>jQuery(function(){ CKEDITOR.config.height = '200px'; CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_P; CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR; Dashmix.helpers(['flatpickr', 'ckeditor']); });</script>
    <!-- Page JS Code -->

@endsection

@section('content')

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- Partial Table -->
    <div class="block block-rounded block-bordered">
    <!-- New Post -->
    <form action="{{ URL::to('cms/modulo/editar/guardar').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="item" value="{{ $data->id_tab_item }}">
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="{{ URL::to('cms/modulo/editar').'/'.$data->id_tab_item }}">
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
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control {!! $errors->has('descripcion') ? 'is-invalid' : '' !!}" id="descripcion" name="descripcion" placeholder="Descripcion..." value="{{ empty(old('descripcion'))? $data->de_item_detalle : old('descripcion') }}" {{ $errors->has('descripcion') ? 'aria-describedby="descripcion-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('descripcion') )
                                <div id="descripcion-error" class="invalid-feedback animated fadeIn">{{ $errors->first('descripcion') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="icono">Icono</label>
                            <select class="custom-select {!! $errors->has('icono') ? 'is-invalid' : '' !!}" name="icono" id="icono" {{ $errors->has('icono') ? 'aria-describedby="icono-error" aria-invalid="true"' : '' }}>
                                @foreach($tab_icono as $icono)
                                    <option value="{{ $icono->id }}" {{ $icono->id == $data->id_tab_icono ? 'selected' : '' }}>{{ $icono->de_icono }}</option>
                                @endforeach
                            </select>
                            @if( $errors->has('icono') )
                                <div id="icono-error" class="invalid-feedback animated fadeIn">{{ $errors->first('icono') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="formato">Formato</label>
                            <select class="custom-select {!! $errors->has('formato') ? 'is-invalid' : '' !!}" name="formato" id="formato" {{ $errors->has('formato') ? 'aria-describedby="formato-error" aria-invalid="true"' : '' }}>
                                @foreach($tab_item_formato as $formato)
                                    <option value="{{ $formato->id }}" {{ $formato->id == $data->id_tab_item_formato ? 'selected' : '' }}>{{ $formato->de_item_formato }}</option>
                                @endforeach
                            </select>
                            @if( $errors->has('formato') )
                                <div id="formato-error" class="invalid-feedback animated fadeIn">{{ $errors->first('formato') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea id="js-ckeditor" class="form-control {!! $errors->has('contenido') ? 'is-invalid' : '' !!}" id="contenido" name="contenido" {{ $errors->has('contenido') ? 'aria-describedby="contenido-error" aria-invalid="true"' : '' }}>
                            {{ empty(old('contenido'))? $data->de_contenido : old('contenido') }}
                            </textarea>
                            @if( $errors->has('contenido') )
                                <div id="contenido-error" class="invalid-feedback animated fadeIn">{{ $errors->first('contenido') }}</div>
                            @endif
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
    </div>
    <!-- END New Post -->
</div>
<!-- END Page Content -->

@endsection