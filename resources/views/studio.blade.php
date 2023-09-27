@extends('layouts.app')

@section('content')
<a href="/cotizar" class="btn-flotante">Cotizar</a>

<div class="slider-area2" style="background-image: url(https://zhimpatattoosperu.com/storage/{{$studio->imagen}});">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>Studio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--? About Area Start -->
<section class="about-area section-padding30 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-11">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="{{assets('assets/img/gallery/zhimpa.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3 mb-35">
                        <span>{{$studio->subtitulo}}</span>
                        <h2>{{$studio->titulo}}</h2>
                    </div>
                    <p class="mb-30 pera-bottom">{{$studio->description}}</p>
                </div>
            </div>

            <div class="row justify-content-center section-padding">
                <iframe class="mobil-iframe" style="border-radius: 20px;" src="{{$studio->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
            </div>
        </div>
    </div>
    <!-- About Shape -->
    <!-- <div class="about-shape">
        <img src="assets/img/gallery/about-shape.png" alt="">
    </div> -->
</section>
<!-- About-2 Area End -->

<!--? Services Area Start -->
<!-- <section class="service-area section-padding bg-black">
    <div class="container"> -->
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                <div class="section-tittle text-center mb-90">
                    <span>{{$studio->subtitulo}}</span>
                    <h2>{{$studio->titulo}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">                        
                        <i><img src="assets/img/iconos/vision.png" alt=""></i>
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Visión</a></h4>
                        <p>{{$studio->vision}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption active text-center mb-30">
                    <div class="service-icon">
                        <i class="flaticon-healthcare-and-medical"></i>
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Inspiración</a></h4>
                        <p>{{$studio->inspiracion}}</p>
                    </div>
                </div>
            </div> 
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">
                        <i><img src="assets/img/iconos/mision.png" alt=""></i>
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Misión</a></h4>
                        <p>{{$studio->mision}}</p>
                    </div>
                </div>
            </div>                    
        </div> -->
        <!-- <div class="row justify-content-center section-padding">
            <iframe class="mobil-iframe" style="border-radius: 20px;" src="{{$studio->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
        </div> -->
    <!-- </div>
</section> -->
<!-- Services Area End -->
@endsection