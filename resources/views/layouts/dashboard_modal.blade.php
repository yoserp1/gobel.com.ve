<!-- Pop In Block Modal -->
<div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Aviso</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>¿Desea salir del sistema?</p>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    {{--<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">SI</button>--}}
                    <a href="{{ url('/cms/autenticar') }}" class="btn btn-sm btn-primary">SI</a>
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop In Block Modal -->

@yield('modal_after')