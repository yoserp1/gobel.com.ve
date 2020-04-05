<!-- Profile -->
<div class="tab-pane pull-x fade fade-up show active" id="so-profile" role="tabpanel">
    <form action="be_pages_dashboard.html" method="POST">
        <div class="block mb-0">
            <!-- Personal -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Datos</span>
            </div>
            <div class="block-content block-content-full">
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
                    <label for="so-profile-password">Contraseña Actual</label>
                    <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                </div>
                <div class="form-group">
                    <label for="so-profile-new-password">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                </div>
                <div class="form-group">
                    <label for="so-profile-new-password-confirm">Confirmar Nueva Contraseña</label>
                    <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
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