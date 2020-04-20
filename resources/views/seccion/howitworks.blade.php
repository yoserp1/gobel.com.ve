<!-- Start How-it-Work -->
<section class="section" id="howitworks">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4">
                    <h2>{{ $value->de_item }}</h2>
                    <p class="section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                </div>
            </div>
        </div>
        <div class="how-works-block mt-4">
            <div class="row">
                @foreach($contenido as $key => $value_detale)
                <div class="col-lg-4">
                    <div class="how-works-box wow fadeInUp" data-wow-duration="1000ms">
                        <img src="{{ asset($value_detale->url_imagen) }}"  class="img-fluid mx-auto d-block" alt="">
                        <div class="text-center">
                            <h4 class="mt-4">{{ $value_detale->de_item_detalle }}</h4>
                            <p class="mb-0 mt-4">{{ strip_tags($value_detale->de_contenido) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End How-it-Work -->