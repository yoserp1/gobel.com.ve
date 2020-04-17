<!-- Home Start-->
<section class="theme-bg overflow-hidden home-section" id="home">
    <div id="particles-js">
    </div>
    <div class="waves-bg-img home-bg">
        <div class="circle-clip">
            <img src="images/slider-img/pattern-1.png" class="img-fluid" alt="">
        </div>
        <div class="square-clip">
            <img src="images/slider-img/pattern-2.png" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme main-slider">
                @foreach($contenido as $key => $value)
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="content-fadeInUp">
                                <h2 class="heading">
                                {{ $value->de_item_detalle }}
                                </h2>
                                <p class="para-txt">
                                {{ strip_tags($value->de_contenido) }}
                                </p>
                                <div class="learn-more">
                                    <a href="#aboutus" class="btn btn-white btn-rounded text-white">Saber Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-fadeInRight">
                                <img src="{{ asset($value->url_imagen) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Home End -->