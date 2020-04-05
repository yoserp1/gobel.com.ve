<!-- Profile -->
<div class="tab-pane pull-x fade fade-up show active" id="so-profile" role="tabpanel">
    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
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
                <span class="text-uppercase font-size-sm font-w700">Password Update</span>
            </div>
            <div class="block-content block-content-full">
                <div class="form-group">
                    <label for="so-profile-password">Current Password</label>
                    <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                </div>
                <div class="form-group">
                    <label for="so-profile-new-password">New Password</label>
                    <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                </div>
                <div class="form-group">
                    <label for="so-profile-new-password-confirm">Confirm New Password</label>
                    <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                </div>
            </div>
            <!-- END Password Update -->

            <!-- Options -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Options</span>
            </div>
            <div class="block-content">
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                    <label class="custom-control-label" for="so-settings-status">Online Status</label>
                </div>
                <p class="text-muted font-size-sm">
                    Make your online status visible to other users of your app
                </p>
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                    <label class="custom-control-label" for="so-settings-notifications">Notifications</label>
                </div>
                <p class="text-muted font-size-sm">
                    Receive desktop notifications regarding your projects and sales
                </p>
                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                    <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                    <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>
                </div>
                <p class="text-muted font-size-sm">
                    If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                </p>
            </div>
            <!-- END Options -->

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