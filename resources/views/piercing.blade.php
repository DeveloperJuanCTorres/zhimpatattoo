@extends('layouts.app')

@section('content')
<a href="/cotizar" class="btn-flotante">Cotizar</a>

<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>Artistas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
        
        <section class="imagen-light" style="z-index: 9 !important;">
            <i class="fas fa-times close"></i>
            <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
        </section>
            </form>   
        <!--? Team Start -->
        <div class="team-area bg-black section-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-100">
                            <span>Professional Teams</span>
                            <h2>Nuestros Artistas</h2>
                        </div>
                    </div>
                </div>
                <div class="row dot-style justify-content-center">
                    <!-- single Tem -->
                    @foreach($artistas as $item)
                    <div class="col-xl-3 col-lg-3 p-4">                
                        <a href="{{route('artistaid',$item)}}">
                            <div class="single-team mb-80 text-center">
                                <div class="team-img">
                                    <img src="https://zhimpatattoosperu.com/storage/{{$item->image}}" alt="">
                                </div>
                                <div class="team-caption">
                                    <span>{{$item->title}}</span>
                                    <h3><a href="#">{{$item->name}}</a></h3>
                                </div>
                            </div>
                        </a>    
                                    
                        <div class="owl-carousel owl-theme p-4">
                            @php
                                $artes = json_decode($item->artes)
                            @endphp
                            @foreach($artes as $arte)
                            <div class="item">
                                <img class="img-galeria" src="https://zhimpatattoosperu.com/storage/{{$arte}}" alt="">
                            </div>
                            @endforeach
                        </div>                
                    </div>
                    @endforeach            
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        
@endsection

@push('javascript')

<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
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
