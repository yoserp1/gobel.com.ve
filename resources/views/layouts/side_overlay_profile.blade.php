<!-- Profile -->
<div class="tab-pane pull-x fade fade-up show active" id="so-profile" role="tabpanel">
    <form action="{{ url('/cms/usuario/password') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="block mb-0">
            <!-- Personal -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Datos</span>
            </div>
            <div class="block-content block-content-full">

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

                @if( $errors->has('da_mensaje') )
                    <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                        <div class="flex-fill mr-3">
                            <p class="mb-0">{{ $errors->first('da_mensaje') }}</p>
                        </div>
                    </div>
                @endif

                @if (session()->has('msg'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div class="flex-00-auto">
                            <i class="fa fa-fw fa-check"></i>
                        </div>
                        <div class="flex-fill ml-3">
                            <p class="mb-0">{{ session('msg') }}</p>
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{ Auth::user()->da_login }}">
                </div>
                <div class="form-group">
                    <label for="so-profile-name">Nombre</label>
                    <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="{{ Auth::user()->nb_usuario }}">
                </div>
                <div class="form-group">
                    <label for="so-profile-email">Correo</label>
                    <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="{{ Auth::user()->da_email }}">
                </div>
            </div>
            <!-- END Personal -->

            <!-- Password Update -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Actualización de contraseña</span>
            </div>
            <div class="block-content block-content-full">
                <div class="form-group">
                    <label for="contraseña_actual">Contraseña Actual</label>
                    <input type="password" class="form-control {!! $errors->has('contraseña_actual') ? 'is-invalid' : '' !!}" id="contraseña_actual" name="contraseña_actual" {!! $errors->has('contraseña_actual') ? 'aria-describedby="contraseña_actual-error" aria-invalid="true"' : '' !!} placeholder="Contraseña Actual" value="{{ old('contraseña_actual') }}">
                    @if( $errors->has('contraseña_actual') )
                        <div id="contraseña_actual-error" class="invalid-feedback animated fadeIn">{{ $errors->first('contraseña_actual') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contraseña">Nueva Contraseña</label>
                    <input type="password" class="form-control {!! $errors->has('contraseña') ? 'is-invalid' : '' !!}" id="contraseña" name="contraseña" {!! $errors->has('contraseña') ? 'aria-describedby="contraseña-error" aria-invalid="true"' : '' !!} placeholder="Contraseña Nueva" value="{{ old('contraseña') }}">
                    @if( $errors->has('contraseña') )
                        <div id="contraseña-error" class="invalid-feedback animated fadeIn">{{ $errors->first('contraseña') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contraseña_confirmation">Confirmar Nueva Contraseña</label>
                    <input type="password" class="form-control  {!! $errors->has('contraseña_confirmation') ? 'is-invalid' : '' !!}" id="contraseña_confirmation" name="contraseña_confirmation" {!! $errors->has('contraseña_confirmation') ? 'aria-describedby="contraseña_confirmation-error" aria-invalid="true"' : '' !!} placeholder="Contraseña Confirmación" value="{{ old('contraseña_confirmation') }}">
                    @if( $errors->has('contraseña_confirmation') )
                        <div id="contraseña_confirmation-error" class="invalid-feedback animated fadeIn">{{ $errors->first('contraseña_confirmation') }}</div>
                    @endif
                </div>
            </div>
            <!-- END Password Update -->

            {{--
            <!-- Options -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Opciones</span>
            </div>
            <div class="block-content">
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                    <label class="custom-control-label" for="so-settings-status">Estado en línea</label>
                </div>
                <p class="text-muted font-size-sm">
                    Haga que su estado en línea sea visible para otros usuarios de su aplicación
                </p>
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                    <label class="custom-control-label" for="so-settings-notifications">Notificaciones</label>
                </div>
                <p class="text-muted font-size-sm">
                    Reciba notificaciones de escritorio sobre sus proyectos y ventas
                </p>
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                    <label class="custom-control-label" for="so-settings-updates">Actualización automática</label>
                </div>
                <p class="text-muted font-size-sm">
                Si está habilitado, mantendremos todas sus aplicaciones y servidores actualizados con las funciones más recientes automáticamente
                </p>
            </div>
            <!-- END Options -->
            --}}

            <!-- Submit -->
            <div class="block-content row justify-content-center border-top">
                <div class="col-9">
                    <button type="submit" class="btn btn-block btn-hero-primary">
                        <i class="fa fa-fw fa-save mr-1"></i> Guardar
                    </button>
                </div>
            </div>
            <!-- END Submit -->
        </div>
    </form>
</div>
<!-- END Profile -->