<!-- Start Features -->
<section class="section features-section overflow-hidden" id="features">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($contenido as $key => $value_detale)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="app-feature-box">
                    <div class="feature-inner wow fadeInUp" data-wow-duration="1500ms">
                        <div class="app-feature-main">
                            <div class="app-feature-inner">
                                <div class="icon-block">
                                    <i class="icon mdi mdi-rocket"></i>
                                </div>
                                <h4>{{ $value_detale->de_item_detalle }}</h4>
                            </div>
                        </div>
                        <div class="text">{{ strip_tags($value_detale->de_contenido) }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row align-items-center">
            <div class="featured-info col-lg-8 col-md-12 col-sm-12">
                <div class="featured-inner">
                    <div class="section-title mb-4">
                        <h2>{{ $value->de_item }}</h2>
                        <p class="section_subtitle">{{ $value->de_contenido }}</p>
                    </div>
                    <div class="row">
                        @foreach($contenido as $key => $value_detale)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="featured-list-block wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.5s">
                                <div class="featured-list-inner">
                                    <div class="icon-block">
                                        <span class="icon mdi mdi-brush"></span>
                                    </div>
                                    <h4>{{ $value_detale->de_item_detalle }}</h4>
                                    <div class="text">{{ strip_tags($value_detale->de_contenido) }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-12 col-sm-12">
                <div class="image-block wow zoomIn" data-wow-delay="0.3s" data-wow-duration="1.5s">
                    <div class="inner-column">
                        <div class="circles-img"></div>
                        <div class="image text-center">
                            <img src="{{ asset($value->url_imagen) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features -->