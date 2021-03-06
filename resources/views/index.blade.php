@extends('layouts.app')

@section('title','Medicexpress')

@section('content')
    <section class="about-section about-experience">
        <div class="container container-custom">
        <div class="row">
            <!-- Service Icon -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/iconos/medico.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text">
                        <h4><span>Atención</span> Medica</h4>
                        <p>En su domicilio, lugar de trabajo y/u otro lugar dentro de la cobertura</p>
                    </div>
                </div>
            </div>
            <!-- Service Icon 02 -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/iconos/salud.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text align-items-center">
                        <h4><span>Salud</span> Ocupacional</h4>
                        <p>Disponemos de profesionales médicos especializados en salud ocupacional</p>
                    </div>
                </div>
            </div>
            <!-- Service Icon 03 -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/iconos/consultoria.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text">
                        <h4><span>Consultorias</span> </h4>
                        <p>Análisis y explicación de conceptos de exámenes ocupacionales</p>
                    </div>
                </div>
            </div>
            <!--//End Service Icon -->
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-title-block">
                    <h3><span>Quienes</span> Somos</h3>
                    <p>Somos un grupo de profesionales dedicados al servicio privado en el área de la salud integral 
                        (medico/ambulatorio), salud ocupacional, jornadas preventivas de salud y consultorías en seguridad y salud a 
                        toda la comunidad, trabajadores independientes, contratistas y empresas. Brindando CALIDAD Y SERVICIO.</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary mt-4">Leer mas</a>
        </div>
    </section>
    <!--==================== Form cotizacion ====================-->
    <section class="space about-form">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="heading-style1 mb-0">
                        <span>----Cotiza ya----</span>
                        <h2>Que esperas para realizar tu cotización</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="dental-features_list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <h6>Painless Dental Treatments</h6>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <h6>Flexible Payment Options </h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="dental-features_list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <h6>Experienced Dental Professionals</h6>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <h6>Beautiful Smile Design</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Leer mas</a>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="booking-form-style2">
                        <form action="#">
                            <h3>Cotizar</h3>
                           <!-- <div class="form-group form-group-cutom">
                                <input type="text" class="form-control form-custom" placeholder="Date and time">
                                <i class="far fa-clock"></i>
                            </div> -->
                            <div class="form-group form-group-cutom">
                                <input type="text" class="form-control form-custom" placeholder="Ingresa tu nombre">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="form-group form-group-cutom">
                                <input type="number" class="form-control form-custom" placeholder="Numero de telefono">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="form-group form-group-cutom">
                                <input type="email" class="form-control form-custom" placeholder="Ingresa tu correo">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <!--<div class="form-group form-group-cutom">
                                <input type="text" class="form-control form-custom" placeholder="Select your location">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="form-group form-group-cutom">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Select a department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group form-group-cutom">
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>Select a doctor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>-->
                            <a href="#" class="btn btn-success w-100">Enviar Solicitud</a>
                        </form>
                        <div class="booking-bg">
                            <img src="{{asset('assets/img/form-bg.png')}}" class="img-fluid" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Form -->
    <!--==================== Services2 ====================-->
    <section class="services-2">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span>---- Nuestros Servicios ----</span>
                        <h2>Contamos con un excelente servicio medico</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/laboratorio-clinico.png')}}" class="service-box2-img" alt="#">
                        <h3>Laboratorio Clinico</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/examenes.png')}}" class="service-box2-img" alt="#">
                        <h3>Examenes</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/electrocardiografia.png')}}" class="service-box2-img" alt="#">
                        <h3>Electrocardiografia</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/rayos-x.png')}}" class="service-box2-img" alt="#">
                        <h3>Rayos X</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/espirometria.png')}}" class="service-box2-img" alt="#">
                        <h3>Espirometria</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/iconos/ecografia.png')}}" class="service-box2-img" alt="#">
                        <h3>Ecografias</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#" class="btn btn-primary">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Services2 -->
    <!--==================== Blog Grid ====================-->
    <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-style1">
                        <span>--- Blog ----</span>
                        <h2>Últimas noticias y eventos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider blog-slider">
                        <div class="blog-grid-wrap">
                            <div class="blog-grid-img">
                                <img src="{{asset('assets/img/blog-grid1.jpg')}}" class="img-fluid" alt="#">
                                <div class="blog-grid-date">
                                    <h5>25</h5>
                                    <p>May</p>
                                </div>
                            </div>
                            <div class="blog-grid_content">
                                <div class="blog-grid-top_icon">
                                    <label>Mediacal</label>
                                    <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33</p>
                                </div>
                                <div class="blog-grid_text">
                                    <a href="#">
                                        <h4>Telemedicine overprescribes antibiotics: Are you real...</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eius mod tempor </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="blog-grid-wrap">
                            <div class="blog-grid-img">
                                <img src="{{asset('assets/img/blog-grid2.jpg')}}" class="img-fluid" alt="#">
                                <div class="blog-grid-date">
                                    <h5>15</h5>
                                    <p>Jan</p>
                                </div>
                            </div>
                            <div class="blog-grid_content">
                                <div class="blog-grid-top_icon">
                                    <label>Mediacal</label>
                                    <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33</p>
                                </div>
                                <div class="blog-grid_text">
                                    <a href="#">
                                        <h4>How often should I replace my toothbrush?..</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eius mod tempor </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="blog-grid-wrap">
                            <div class="blog-grid-img">
                                <img src="{{asset('assets/img/blog-grid3.jpg')}}" class="img-fluid" alt="#">
                                <div class="blog-grid-date">
                                    <h5>05</h5>
                                    <p>Jun</p>
                                </div>
                            </div>
                            <div class="blog-grid_content">
                                <div class="blog-grid-top_icon">
                                    <label>Mediacal</label>
                                    <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33</p>
                                </div>
                                <div class="blog-grid_text">
                                    <a href="#">
                                        <h4>Things you may not know about medicaid </h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eius mod tempor </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-wrap">
                            <div class="blog-grid-img">
                                <img src="{{asset('assets/img/blog-grid4.jpg')}}" class="img-fluid" alt="#">
                                <div class="blog-grid-date">
                                    <h5>26</h5>
                                    <p>May</p>
                                </div>
                            </div>
                            <div class="blog-grid_content">
                                <div class="blog-grid-top_icon">
                                    <label>Mediacal</label>
                                    <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>233</p>
                                </div>
                                <div class="blog-grid_text">
                                    <a href="#">
                                        <h4>Telemedicine overprescribes antibiotics: Are you real...</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eius mod tempor </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Blog Grid -->
    <!--==================== contact us ====================-->
    <section class="space background-bg4">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="appointment-form_wrap">
                        <div class="heading-style1">
                            <span>---Contácto Medicexpress---</span>
                            <h2>Contáctanos</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Ingrese su nombre">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="email" class="form-control form-custom" placeholder="Ingrese su correo">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="number" class="form-control form-custom" placeholder="Ingrese su numero telefonico">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-cutom">
                                        <label for="exampleFormControlTextarea1">Mensaje</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-success">Enviar mensaje</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="why-choose_block">
                        <div class="heading-style1 mb-0">
                            <span>Nosotros</span>
                            <h2>Por qué elegirnos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do eius mod tempor inc ididuntut</p>
                            <hr>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="{{asset('assets/img/iconos/hospital.png')}}" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Urgencias</h4>
                                <p>Servicio de urgencias todos los dias</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="{{asset('assets/img/iconos/ambulancia.png')}}" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Servicio de ambulancia</h4>
                                <p>Traslado en ambulancia a su centro medico</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="{{asset('assets/img/iconos/evento.png')}}" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Cobertura de Eventos</h4>
                                <p>Asistencia médica con unidad Móvil en eventos empresariales</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap mb-0">
                            <img src="{{asset('assets/img/iconos/rapido.png')}}" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Atención Medica 24h/7 </h4>
                                <p>Asistencia médica en su domicilio, lugar de trabajo y/u otro lugar </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection