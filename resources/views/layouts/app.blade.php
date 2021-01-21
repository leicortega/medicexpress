<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo/icono.svg')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- Before & After CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/twentytwenty.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/twentytwenty-no-compass.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <!--==================== Header ====================-->
    <div>
        <div class="top-bar-style2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="topbar-social">
                            <li><a href="https://www.facebook.com/Medicexpress-100973331283413"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 d-flex justify-content-end">
                        <ul class="topbar-contact ml-auto">
                            <li>servicioalcliente@medicexpress.com</li>
                            <li>+593 969 665 037</li>
                            <li><a href="appointment.html" class="btn btn-success">Cotizar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav menu -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo/logo.svg')}}" alt="#" style="width: 145px;" /></a>
                        <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Inicio 
                                    </a>
                                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Home Page One</a>
                                        <a class="dropdown-item" href="#">Home Page Two</a>
                                        <a class="dropdown-item" href="#">Home Page Three</a>
                                    </div> --}}
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Quienes Somos <i class="fas fa-plus"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Misión</a>
                                        <a class="dropdown-item" href="#">Visión</a>
                                        <a class="dropdown-item" href="#">Objetivo y principios de calidad </a>
                                        <a class="dropdown-item" href="#">Valores</a>
                                    </div>
                                </li>
                                <!-- Sub Menu -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Servicios <i class="fas fa-plus"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Atención medica</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Salud ocupacional</a>
                                                </li>
                                                <!--<li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" href="#">Our Doctors <i class="fas fa-plus"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu1">
                                                        <li><a class="dropdown-item" href="#">Doctors One</a></li>
                                                        <li><a class="dropdown-item" href="#">Doctors Two</a></li>
                                                        <li><a class="dropdown-item" href="#">Doctors Three</a></li>
                                                    </ul>
                                                </li>-->
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Consultorias</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--//End Sub Menu -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="#" id="navbarDropdown3"> Blog </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="navbarDropdown3">Contáctenos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--//End Nav menu -->
                </div>
            </div>
        </div>
        <div class="main-slider">
            <div>
                <div class="slider-img-block">
                    <div class="slider-img-text">
                        <img src="{{asset('assets/img/slider1.jpg')}}" class="img-fluid" alt="#">
                        <!-- Slider Title -->

                        <div class="main-title slider-text-wrap">
                            <span>We are here for you</span>
                            <h1>What Makes Us Better, Makes <br> You Better.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex. 
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos ipsum dolor sit amet.</p>
                            <a href="#" class="btn btn-primary">Make Appointment</a>
                        </div>

                        <!--//End Slider Title -->
                    </div>
                </div>
            </div>
            <div>
                <div class="slider-video">
                    <img src="{{asset('assets/img/banner/slider1.jpeg')}}" class="img-fluid" alt="#">
                </div>
            </div>

            <div>
                <div class="slider-img-block">
                    <div class="slider-img-text">
                        <img src="{{asset('assets/img/slider1.jpg')}}" class="img-fluid" alt="#">
                        <!-- Slider Title -->
                        <div class="main-title slider-text-wrap">
                            <span>We are here for you</span>
                            <h1>What Makes Us Better, Makes <br> You Better.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos ipsum dolor sit amet.</p>
                            <a href="#" class="btn btn-primary">Make Appointment</a>
                        </div>
                        <!--//End Slider Title -->
                    </div>
                </div>
            </div>
            <div>
                <div class="slider-video">
                    <img src="{{asset('assets/img/banner/slider2.jpeg')}}" class="img-fluid" alt="#" style="height: 610px">
                   
                </div>
            </div>

            <div>
                <div class="slider-img-block">
                    <div class="slider-img-text">
                        <img src="{{asset('assets/img/slider1.jpg')}}" class="img-fluid" alt="#">
                        <!-- Slider Title -->

                        <div class="main-title slider-text-wrap">
                            <span>We are here for you</span>
                            <h1>What Makes Us Better, Makes <br> You Better.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex. 
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos ipsum dolor sit amet.</p>
                            <a href="#" class="btn btn-primary">Make Appointment</a>
                        </div>

                        <!--//End Slider Title -->
                    </div>
                </div>
            </div>
            <div>
                <div class="slider-video">
                    <img src="{{asset('assets/img/banner/slider3.jpeg')}}" class="img-fluid" alt="#">
                </div>
            </div>

            <div>
                <div class="slider-img-block">
                    <div class="slider-img-text">
                        <img src="{{asset('assets/img/slider1.jpg')}}" class="img-fluid" alt="#">
                        <!-- Slider Title -->

                        <div class="main-title slider-text-wrap">
                            <span>We are here for you</span>
                            <h1>What Makes Us Better, Makes <br> You Better.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex. 
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos ipsum dolor sit amet.</p>
                            <a href="#" class="btn btn-primary">Make Appointment</a>
                        </div>

                        <!--//End Slider Title -->
                    </div>
                </div>
            </div>
            <div>
                <div class="slider-video">
                    <img src="{{asset('assets/img/banner/slider4.jpeg')}}" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </div>
    <!--//End Header -->
    @yield('content')

    <!--==================whatsapp====================-->
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=+593 969 665 037" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" style="width: 60px">
        </a>
    </div>
    <!--==================== Footer ====================-->
    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="foot-contact-block">
                        <img src="{{asset('assets/img//logo/logo.svg')}}" class="img-fluid" alt="#"  style="width: 160px; background-color: #fff;"/>
                        <p>
                            Forjando juntos una intervención efectiva, 
                            eficiente y eficaz al compromiso de mejorar la calidad de vida y 
                            siguiendo las normativas vigentes establecidas a nivel Nacional.
                        </p>
                        <a href="tel:+593 969 665 037">
                            <h4><i class="fas fa-phone"></i>+593 969 665 037</h4>
                        </a>
                        <a href="tel:+593 979 353 429">
                            <h4><i class="fas fa-phone"></i>+593 979 353 429</h4>
                        </a>
                        <a href="mailto:servicioalcliente@medicexpress.com">
                            <h4><i class="far fa-envelope"></i>servicio al cliente</h4>
                        </a>
                        <a href="https://www.google.com.co/maps/search/Urdenor+1+MZ+139+EDIF.+Citrino+Ofc305/@-2.1477985,-79.9030497,17.26z?hl=es-419">
                            <h4><i class="fa fa-map-marker-alt"></i>Urdenor 1 MZ 139 EDIF. Citrino Ofc305</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Quienes somos</a>
                            </li>
                            
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Nuestros servicios</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Blog</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Contacto</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="foot-link-box">
                        <h4>Contamos con</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Fichas medicas</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Laboratorio clinico</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Examenes</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Electrocardiografia</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Espirometria</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Rayos X</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Audiometria</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Ecografias</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box footlink-box_btn">
                        <a href="#" class="btn btn-outline-success">Find a Doctor</a>
                        <a href="#" class="btn btn-outline-success">Career</a>
                        <a href="#" class="btn btn-outline-success">Newsletter</a>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © Medicexpress 2021. Todos lo derechos reservados</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//End Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider Js -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Before & After Js -->
    <script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/js/jquery.twentytwenty.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('assets/js/script.js')}}"></script>

    
</body>
</html>