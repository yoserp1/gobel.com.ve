<!-- Start FAQ's -->
<section id="faq" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4">
                    <h2>{{ $value->de_item }}</h2>
                    <p class="section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="accordion" class="faq-accordion-panel wow fadeInUp" data-wow-duration="1500ms">
                    @foreach($contenido as $key => $value_detale)
                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="heading_{{ $key }}">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapse_{{ $key }}" aria-expanded="false" aria-controls="collapseOne"><span>{{ $value_detale->de_item_detalle }}</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                            </h4>
                        </div>
                        <div id="collapse_{{ $key }}" class="collapse" aria-labelledby="heading_{{ $key }}" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                {{ strip_tags($value_detale->de_contenido) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeIn" data-wow-duration="1500ms">
                    <img src="{{ asset($value->url_imagen) }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ's -->