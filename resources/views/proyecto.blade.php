@extends('layouts.app')

@section('content')

<a href="/cotizar" class="btn-flotante">Cotizar</a>

<!--? Hero Start -->
<div class="slider-area3">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>Proyectos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-area pb-180 bg-black section-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                <div class="section-tittle text-center mb-100">
                    <h2>Tattos</h2>
                </div>
            </div>
        </div>
        <div class="row dot-style justify-content-center">           
            
            <div class="box">
                <div class="image-wrap">
                    <div class="image image-0"></div>
                </div>
                <div class="text">
                    <span>Sugar plum</span>
                </div>
            </div>

            <div class="box">
                <div class="image-wrap">
                    <div class="image image-1"></div>
                </div>
                <div class="text">
                    <span>apple pie</span>
                </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-2"></div>
            </div>
            <div class="text">
                <span>gummy bears</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-3"></div>
            </div>
            <div class="text">
                <span>sesame snaps</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-4"></div>
            </div>
            <div class="text">
                <span>chupa chups</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-5"></div>
            </div>
            <div class="text">
                <span>chocolate cookie</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-6"></div>
            </div>
            <div class="text">
                <span>cheescake muffin</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-7"></div>
            </div>
            <div class="text">
                <span>sweet toffee</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-8"></div>
            </div>
            <div class="text">
                <span>carrot cake</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-9"></div>
            </div>
            <div class="text">
                <span>lollipop</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-10"></div>
            </div>
            <div class="text">
                <span>macaroon</span>
            </div>
            </div>

            <div class="box">
            <div class="image-wrap">
                <div class="image image-11"></div>
            </div>
            <div class="text">
                <span>lemon tart</span>
            </div>
            </div>

            <div class="unsplash-info">all images in this demo are from <a target="_blank" href="https://unsplash.com">unsplash.com</a></div>
                    </div>
                </div>
</div>
<!-- Team End -->

@endsection

@push('css')
<link rel="stylesheet" href="{{asset('assets/css/proyecto.css')}}">
@endpush
@push('javascript')

@endpush