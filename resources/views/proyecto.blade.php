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
        <div class="row dot-style justify-content-center p-4">           
            @foreach($proyectos as $item)   
            <a href="{{route('proyectoid',$item)}}" style="display: contents;">         
                <div class="box" style="border-radius: 20px;">                
                    <div class="image-wrap">                       
                        <div class="image" style="background: url(https://zhimpatattoosperu.com/storage/{{$item->proyecto_img}});background-repeat: no-repeat;background-size: cover;"></div>                        
                    </div>
                    <div class="text">
                        <span>{{$item->proyecto_name}} </span>
                    </div>               
                </div>    
            </a>        
            @endforeach
          
</div>
<!-- Team End -->

@endsection

@push('css')
<link rel="stylesheet" href="{{asset('assets/css/proyecto.css')}}?v=1993.2">
@endpush
@push('javascript')

@endpush