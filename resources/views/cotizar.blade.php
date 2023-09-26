@extends('layouts.app')

@section('content')
<!--? Hero Start -->
<div class="slider-area3">
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
                <form class="form-contact contact_form whatsapp-form">
                    <div class="row">                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control validate" name="name" id="wa_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control validate" name="email" id="wa_email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control validate" name="mobil" id="wa_mobil" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Mobil'" placeholder="Enter Mobil">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select name="tipo" id="wa_tipo">
                                    <option value="">Tipo de Tatuaje</option>
                                    <option value="0">Color</option>
                                    <option value="1">Grises</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select name="area" id="wa_area">
                                    <option value="default">Área del Cuerpo</option>
                                    <option value="0">Aún no me decido</option>
                                    <option value="1">Brazo</option>
                                    <option value="2">Pierna</option>
                                    <option value="3">Espalda</option>
                                    <option value="4">Pecho</option>
                                    <option value="5">Mano</option>
                                    <option value="6">Cuello</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control validate" name="medida" id="wa_medida" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tamaño del tattoo: Ej: 5cm x 5cm'" placeholder="Tamaño del tattoo: Ej: 5cm x 5cm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100 validate" name="descripcion" id="wa_descripcion" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="form-group">
                                <input type="file" name="file-1" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
                                <label for="file-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                <span class="iborrainputfile">Seleccionar archivo</span>
                                </label>
                            </div>
                        </div> -->
                    </div>
                    <div class="form-group mt-3">
                        <!-- <button type="submit" class="button button-contactForm boxed-btn">Cotizar Ahora</button> -->
                        <a class="send_form button button-contactForm boxed-btn" href="javascript:void" type="submit" title="Send to Whatsapp">Cotizar Ahora</a>
                        <div id="text-info"></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Lima, Perú.</h3>
                        <p>Av{{$home->ubicacion}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+51 {{$home->telefono}}</h3>
                        <p>Lun a Vi 9am a 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>{{$home->correo}}</h3>
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
                    @foreach($preguntas as $key => $item)
                    <div class="accordion-item p-4">
                        <h2 style="cursor: pointer;color:#d19f68;" class="accordion-header" id="heading{{$key}}" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                            {{$item->pregunta}}
                        </h2>
                        <div id="collapse{{$key}}" class="accordion-collapse collapse {{$key==0?'show':''}}" aria-labelledby="heading{{$key}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="footer-pera">
                                    <p style="padding-left: 20px;" class="info1">{{$item->respuesta}}</p>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    @endforeach
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script>
    $(document).on('click','.send_form', function(){
        var input_blanter = document.getElementById('wa_email');

        /* Whatsapp Settings */
        var walink = 'https://web.whatsapp.com/send',
            phone = '51981497441',
            walink2 = 'Hola somos Zhimpa Tattoo',
            text_yes = 'Enviado.',
            text_no = 'Su mensaje no pudo enviarse.';

        /* Smartphone Support */
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var walink = 'whatsapp://send';
        }

        if("" != input_blanter.value){

        /* Call Input Form */
        var input_select_tipo = $("#wa_tipo :selected").text(),
            input_select_area = $("#wa_area :selected").text(),
            input_name = $("#wa_name").val(),
            input_email = $("#wa_email").val(),
            input_mobil = $("#wa_mobil").val(),
            input_medida = $("#wa_medida").val(),
            input_descripcion = $("#wa_descripcion").val();

        /* Final Whatsapp URL */
        var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
            '*Nombre* : ' + input_name + '%0A' +
            '*Telefono* : ' + input_mobil + '%0A' +
            '*Email* : ' + input_email + '%0A' +
            '*Tipo de tatuaje* : ' + input_select_tipo + '%0A' +
            '*Area del cuerpo* : ' + input_select_area + '%0A' +
            '*Tamaño* : ' + input_medida + '%0A' +
            '*Descripcion* : ' + input_descripcion + '%0A';

        /* Whatsapp Window Open */
        window.open(blanter_whatsapp,'_blank');
        document.getElementById("text-info").innerHTML = '<span class="yes" style="color:white;">'+text_yes+'</span>';
        } else {
        document.getElementById("text-info").innerHTML = '<span class="no" style="color:white;">'+text_no+'</span>';
        }
    });
</script>
@endpush