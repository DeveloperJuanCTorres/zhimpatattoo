<footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{asset('assets/img/gallery/footer_bg.png')}}">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/"><img src="{{asset('assets/img/logo/logo-zhimpa.png')}}" width="300" alt=""></a>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="footer-number p-2">
                                        <h4><span>+51 </span>{{$home->telefono}}</h4>
                                        <p>{{$home->correo}}</p>
                                    </div>
                                    <div class="footer-number p-2">
                                        <div class="form-group">
                                           <a href="/cotizar" class="button button-contactForm boxed-btn" style="width: 300px;border-radius: 10px;">Cotizar</a> 
                                           <!-- <button style="width: 300px;"  type="submit" class="button button-contactForm boxed-btn">Cotizar</button> -->
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
             
                        
                        <div class="col-xl-12">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <div class="row justify-content-center">
                                        <h4 class="p-2">Ubicación:</h4>
                                        <div class="footer-pera">
                                            <p class="info1">{{$home->ubicacion}}</p>
                                        </div>
                                    </div>                                    
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta página está hecha por <a href="https://grupotyg.pe/" target="_blank">Grupo T&G</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a target="_target" href="{{$home->twiter}}"><i class="fab fa-twitter"></i></a>
                                <a target="_target" href="{{$home->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a target="_target" href="{{$home->youtube}}"><i class="fas fa-globe"></i></a>
                                <a target="_target" href="{{$home->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>