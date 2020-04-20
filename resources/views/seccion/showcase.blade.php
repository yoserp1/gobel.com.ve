<!--Start Showcase-->
<section class="section gray-bg" id="showcase">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4">
                    <h2>{{ $value->de_item }}</h2>
                    <p class="section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme showcase-slider wow fadeIn" data-wow-duration="1000ms">
                    @foreach($contenido as $key => $value_detale)
                    <div class="item">
                        <div class="showcase-card">
                            <img src="{{ asset($value_detale->url_imagen) }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Showcase-->