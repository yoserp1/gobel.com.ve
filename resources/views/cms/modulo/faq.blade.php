@extends('layouts.dashboard')

@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection

@section('js_after')
    <!-- Page JS Plugins -->

    <!-- Page JS Code -->
    <script>
        $('#borrar').on('show.bs.modal', function (event) {
            $("#borrarForm").attr('action','{{ url('/cms/modulo/editar').'/'.$data->id.'/eliminar' }}');
            var button = $(event.relatedTarget);
            var item_id = button.data('item_id');
            var modal = $(this);
            modal.find('.modal-content #registro_id').val(item_id);
    });
    </script>

@endsection

@section('content')

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- Partial Table -->
    <div class="block block-rounded block-bordered">
    <!-- New Post -->
    <form action="{{ URL::to('cms/modulo/guardar').'/'.$data->id }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="{{ URL::to('cms/modulo') }}">
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
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control {!! $errors->has('descripcion') ? 'is-invalid' : '' !!}" id="descripcion" name="descripcion" placeholder="Descripcion..." value="{{ empty(old('descripcion'))? $data->de_item : old('descripcion') }}" {{ $errors->has('descripcion') ? 'aria-describedby="descripcion-error" aria-invalid="true"' : '' }}>
                            @if( $errors->has('descripcion') )
                                <div id="descripcion-error" class="invalid-feedback animated fadeIn">{{ $errors->first('descripcion') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea class="form-control" id="contenido" name="contenido" rows="3" placeholder="Contenido..">{{ empty(old('contenido'))? $data->de_contenido : old('contenido') }}</textarea>
                            <div class="form-text text-muted font-size-sm font-italic">Contenido de la seccion en la web.</div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Imagen</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input {!! $errors->has('imagen') ? 'is-invalid' : '' !!}" id="imagen" name="imagen" data-toggle="custom-file-input" {{ $errors->has('imagen') ? 'aria-describedby="imagen-error" aria-invalid="true"' : '' }}>
                                    <label for="imagen" class="custom-file-label">{{ empty(old('imagen'))? $data->url_imagen : old('imagen') }}</label>
                                    @if( $errors->has('imagen') )
                                        <div id="imagen-error" class="invalid-feedback animated fadeIn">{{ $errors->first('imagen') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center push">
                <div class="col-md-10">
                    <div class="block-options">
                        <a class="btn btn-light" href="{{ URL::to('cms/modulo/editar').'/'.$data->id.'/nuevo' }}">
                            <i class="fa fa-plus mr-1"></i> Agregar
                        </a>
                    </div>
                </div>
            </div>


            <div class="block-content">

                <div class="row justify-content-center push">
                    <div class="col-md-10">

                    <table class="table table-bordered table-striped table-vcenter">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 15%;">Descripcion</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Contenido</th>
                                <th class="d-none d-md-table-cell text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tab_item_detalle as $key => $value)
                            <tr>
                                <td class="font-w600">{{ $value->de_item_detalle }}</td>
                                <td class="d-none d-sm-table-cell"><em class="text-muted">{{ str_limit(strip_tags($value->de_contenido), 150) }}</em></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ url('/cms/modulo/detalle/editar').'/'. $value->id }}">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Editar">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" title="Borrar" data-target="#borrar" data-item_id="{{ $value->id }}" >
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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