@extends('layouts.app')

@section('content')
<a href="/cotizar" class="btn-flotante">Cotizar</a>

<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>{{$name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!--? About Area Start -->
<section class="about-area section-padding position-relative bg-black">
    <div class="container">
        <div class="row align-items-center">            
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3 mb-35">
                        <span>Mi experiencia</span>
                        <h2>12 Años de experiencia haciendo Tattoo!</h2>
                    </div>
                    <p class="mb-30 pera-bottom">TechnologyCix presents your services with flexible, convenient and cdpoe layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfreplication of the designers is intended.</p>
                    <p class="pera-top mb-50">TechnologyCix presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p>
                    <img src="{{asset('assets/img/gallery/signature.png')}}" alt="">
                </div>                
            </div>
            <div class="col-lg-6 col-md-11">
                <!-- about-img -->
                <div class="about-img text-center">
                    <img src="{{asset('assets/img/gallery/zhimpa.jpg')}}" style="max-width: 400px;border-radius: 30px;" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!--? Gallery Area Start -->
                <div class="gallery-area bg-black">
                    <div class="container">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle1.jpg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle2.jpg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle3.jpg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle4.jpg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle5.jpeg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img-id" style="background-image: url(../assets/img/gallery/galle6.jpg);"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Area End -->
            </div>
        </div>
    </div>
    <!-- About Shape -->
    <div class="about-shape">
        <img src="{{asset('assets/img/gallery/about-shape.png')}}" alt="">
    </div>
</section>
<!-- About-2 Area End -->

@endsection
