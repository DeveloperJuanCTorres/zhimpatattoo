<header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-20">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{$nav=='Inicio'?'active':''}}"><a href="/">Inicio</a></li>
                                            <li class="{{$nav=='Studio'?'active':''}}"><a href="/studio">Studio</a></li>
                                            <li class="{{$nav=='Artistas'?'active':''}}"><a href="/artistas">Artistas</a></li>
                                            <li class="mobile"><a href="#">Proyectos</a></li>
                                            <li class="mobile"><a href="/piercing">Pearcing</a></li>
                                            <li class="mobile"><a href="/cotizar">Cotizar</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>  
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1 mobile_logo">
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets/img/logo/logo-zhimpa.png')}}" width="90%" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="menu-main d-flex align-items-center">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{$nav=='Proyectos'?'active':''}}"><a href="#">Proyectos</a></li>
                                            <li class="{{$nav=='Piercing'?'active':''}}"><a href="/piercing">Piercing</a></li>
                                            <li class="{{$nav=='Cotizar'?'active':''}}"><a href="/cotizar">Cotizar</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>