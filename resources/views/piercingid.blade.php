@extends('layouts.app')

@section('content')
<a href="/cotizar" class="btn-flotante">Cotizar</a>

<!--? Hero Start -->
<div class="slider-area2" style="background-image: url(https://zhimpatattoosperu.com/storage/{{$posicion->banner_img}});">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>{{$posicion->posicion}}</h2>
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
            <div class="col-lg-12 col-12">
                @php
                    $artes = json_decode($posicion->artes);
                @endphp
                <div class="owl-carousel owl-theme p-4">
                    @foreach($artes as $arte)
                    <div class="item">
                        <img class="img-galeria" src="https://zhimpatattoosperu.com/storage/{{$arte}}" alt="">
                    </div>
                    @endforeach
                </div> 
            </div>           
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3 mb-35">
                        <h2>{{$posicion->artist->name}}</h2>
                    </div>
                    <p class="mb-30 pera-bottom">{{$posicion->artist->description}}</p>
                    <!-- <p class="pera-top mb-50">TechnologyCix presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p> -->
                    <!-- <img src="https://zhimpatattoosperu.com/storage/" alt=""> -->
                </div>                
            </div>
            <div class="col-lg-6 col-md-11 pt-4">
                <!-- about-img -->
                <div class="about-img text-center">
                    <img src="https://zhimpatattoosperu.com/storage/{{$posicion->artist->image}}" style="max-width: 400px;border-radius: 30px;" alt="">
                </div>
            </div> 
        </div>
    </div>
    <!-- About Shape -->
    <!-- <div class="about-shape">
        <img src="{{asset('assets/img/gallery/about-shape.png')}}" alt="">
    </div> -->
</section>

<section class="imagen-light" style="z-index: 9 !important;">
    <i class="fas fa-times close"></i>
    <img src="" alt="" class="agregar-imagen">
</section>
<!-- About-2 Area End -->

@endsection

@push('javascript')
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

//IMAGEN TOTAL
const imagenes = document.querySelectorAll('.img-galeria');
const imagenesLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    
    })
})

contenedorLight.addEventListener('click', (e) =>{
    if(e.target !== imagenesLight){
        contenedorLight.classList.remove('show');
        imagenesLight.classList.remove('showImage'); 
    }
})

const aparecerImagen = (imagen) =>{
    imagenesLight.src = imagen;
    contenedorLight.classList.add('show');
    imagenesLight.classList.add('showImage');
}
//FIN IMAGEN TOTAL

</script>
@endpush
