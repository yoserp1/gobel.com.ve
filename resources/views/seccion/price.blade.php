<!-- Start Price -->
<section class="section" id="price">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4">
                    <h2>{{ $value->de_item }}</h2>
                    <p class="section_subtitle mx-auto">{{ strip_tags($value->de_contenido) }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            @foreach($contenido as $key => $value_detale)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="package-box wow fadeIn" data-wow-delay="0s" data-wow-duration="1500ms">
                    <div class="package-box-inner">
                        <div class="package-hover-lines"></div>
                        <div class="package-title">{{ $value_detale->de_item_detalle }}</div>
                        <h2>{{ strip_tags($value_detale->de_contenido) }}</h2>
                        {{--<ul class="package-list">
                            <li>Single License</li>
                            <li>0 Team Members</li>
                            <li>99 mb of Storage</li>
                            <li>1.00 Project</li>
                        </ul>--}}
                        <a href="#" class="theme-btn">Saber mas</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Price -->