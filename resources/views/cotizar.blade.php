@extends('layouts.app')

@section('content')
<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70 text-center">
                        <h2>Cotizar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<section class="contact-section bg-black">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Cotiza Ahora</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Cotizar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Lima, Perú.</h3>
                        <p>Av. José Larco 872, Miraflores</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+51 981 497 441</h3>
                        <p>Lun a Vi 9am a 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>zhimpatattoos@gmail.com</h3>
                        <p>¡Envíanos tu consulta en cualquier momento!</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>

<div class="gallery-area section-padding" style="background-color: #333;padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-start">
                    <span style="font-style: italic;">Nosotros estamos aquí para ti</span>
                    <h2>ZHIMPA TATTOO</h2>
                    <div class="footer-pera">
                        <p class="info1">Durante el proceso de tu cita vivirás una experiencia exclusiva por muy buenos artistas profesionales del tattoo y piercing.</p>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item p-4">
                        <h2 style="cursor: pointer;color:#d19f68;" class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿CUÁL ES EL HORARIO DE ATENCIÓN?
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="footer-pera">
                                    <p style="padding-left: 20px;" class="info1">El horario que mantenemos es de Lunes a Sábado de 10 a.m. a 7:00 p.m.</p>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item p-4">
                        <h2 style="cursor: pointer;color:#d19f68;" class="accordion-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿PUEDO ACERCARME AL STUDIOSIN PREVIA CITA?
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="footer-pera">
                                    <p style="padding-left: 20px;" class="info1">Por supuesto, pero al realizar la reserva mediante nuestras redes o vía whatsapp, tendrás prioridad sobre las fechas disponibles. Estamos Ubicados en Av. José Larco 872, Miraflores, Lima - Peru.</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item p-4">
                        <h2 style="cursor: pointer;color:#d19f68;" class="accordion-header" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            SI NO CUENTO CON EL DISEÑO DEL TATUAJE ¿PUEDEN REALIZARLO DE CERO O PERZONALIZADO?
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="footer-pera">
                                <p style="padding-left: 20px;" class="info1">¡Claro! Puedes agendar una cita de consulta y trabajar tu diseño de tatuaje en conjunto con nuestros artistas.</p>
                            </div> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-7 col-md-9 col-sm-10 m-auto">
                <div class="text-center">
                    <img src="{{asset('assets/img/logo/logo-min.png')}}" style="width: 100%;" alt="">
                </div>
        </div>
        </div>       
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7910814873694!2d-77.03221412527864!3d-12.126442243388714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c81ec67c21b9%3A0x60ad78cf4e3b6083!2sZhimpa%20Tattoos!5e0!3m2!1ses-419!2spe!4v1695224741867!5m2!1ses-419!2spe" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection

@push('css')

@endpush
@push('javascript')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endpush