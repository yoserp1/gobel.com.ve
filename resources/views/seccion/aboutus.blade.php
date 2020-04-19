<!-- Start About-Us -->
<section class="section gray-bg" id="aboutus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 p-0 pr-lg-5">
                <div class="img-box wow fadeInLeft" data-wow-duration="1000ms">
                    <img  src="{{ asset($value->url_imagen) }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-5 ml-auto col-md-12">
                <div class="wow fadeInUp" data-wow-duration="1000ms">
                    <div class="section-title mb-4">
                        <h2>{{ $value->de_item }}</h2>
                        <p class="section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                    </div>
                    {{--
                    <ul class="list-unstyled list-icon">
                        <li class="mb-4"><i class="la la-check"></i> Deos et accusamus et iusto odio</li>
                        <li class="mb-4"><i class="la la-check"></i> Distinctively brand adaptive innovation</li>
                        <li><i class="la la-check"></i> Molestias a orci facilisis rutrum</li>
                    </ul>
                    --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About-Us -->