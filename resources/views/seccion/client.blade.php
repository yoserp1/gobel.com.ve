<!-- Start Testimonial -->
<section class="section bg-gradient" id="client">
    <div id="particles-js1">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4">
                    <h2 class="text-white">{{ $value->de_item }}</h2>
                    <p class="text-white section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme testimonial-slider wow fadeIn" data-wow-duration="1000ms">
                    @foreach($contenido as $key => $value_detale)
                    <div class="item">
                        <div class="testimonial-card shadow-md">
                            <p>{{ strip_tags($value_detale->de_contenido) }}</p>
                        </div>
                        <div class="user-txt">
                            <div class="user-pics"><img  src="{{ asset($value_detale->url_imagen) }}" alt=""></div>
                            <div class="use-info">
                                <h6 class="heading text-white">{{ $value_detale->de_item_detalle }}</h6>
                                <p class="sub-heading text-white"></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial -->