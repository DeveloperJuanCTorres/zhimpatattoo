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
                        <h2>{{$artist->name}}</h2>
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
                        <h2>{{$artist->title}}</h2>
                    </div>
                    <p class="mb-30 pera-bottom">{{$artist->description}}</p>
                    <!-- <p class="pera-top mb-50">TechnologyCix presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p> -->
                    <img src="https://zhimpatattoosperu.com/storage/{{$artist->signature}}" alt="">
                </div>                
            </div>
            <div class="col-lg-6 col-md-11">
                <!-- about-img -->
                <div class="about-img text-center">
                    <img src="https://zhimpatattoosperu.com/storage/{{$artist->image}}" style="max-width: 400px;border-radius: 30px;" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                @php
                    $artes = json_decode($artist->artes);
                @endphp
                <div class="row">
                    @foreach($artes as $arte)
                    <div class="col-lg-3">                    
                        <img class="img-galeria" src="https://zhimpatattoosperu.com/storage/{{$arte}}" alt="">            
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
    <!-- About Shape -->
    <div class="about-shape">
        <img src="{{asset('assets/img/gallery/about-shape.png')}}" alt="">
    </div>
</section>

<!--? Gallery Area Start -->
<div class="gallery-area bg-black">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-100">
                    <span>Nuestra galería de imagenes</span>
                    <h2>Algunas imágenes de nuestro Tattoo</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle1.jpg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle2.jpg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle3.jpg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle4.jpg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle5.jpeg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="box snake mb-30">
                    <div class="gallery-img img-galeria" style="background-image: url(assets/img/gallery/galle6.jpg);"></div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->

<section class="imagen-light" style="z-index: 9 !important;">
    <i class="fas fa-times close"></i>
    <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
</section>
<!-- About-2 Area End -->

@endsection

@push('javascript')
<script>

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
