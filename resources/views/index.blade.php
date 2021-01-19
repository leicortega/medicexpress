@extends('layouts.app')

@section('title','Medicexpress')

@section('content')
    <section class="about-section about-experience">
        <div class="container container-custom">
        <div class="row">
            <!-- Service Icon -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/icon5.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text">
                        <h4><span>Experienced</span> Doctors</h4>
                        <p>Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </div>
            <!-- Service Icon 02 -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/icon6.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text align-items-center">
                        <h4><span>Painless</span> Treatments</h4>
                        <p>Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </div>
            <!-- Service Icon 03 -->
            <div class="col-md-4">
                <div class="service-thumbnail services-top-icon d-flex flex-fill">
                    <img src="{{asset('assets/img/icon7.png')}}" class="img-fluid" alt="#">
                    <div class="service-thumbnail_text">
                        <h4><span>Top</span> Dental Equipment</h4>
                        <p>Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </div>
            <!--//End Service Icon -->
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-title-block">
                    <h3>A <span>totally fresh</span> take on going to the dentist</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary mt-4">Leer mas</a>
        </div>
    </section>
    <!--==================== Form ====================-->
    <section class="space about-form">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="heading-style1 mb-0">
                        <span>----Cotiza ya----</span>
                        <h2>Short Story About Mededin Clinic, Newyork</h2>
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
                        <h2>High Quality Services for You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/008-implant.svg')}}" class="service-box2-img" alt="#">
                        <h3>Laboratorio Clinico</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/009-teeth.svg')}}" class="service-box2-img" alt="#">
                        <h3>Cosmetic Dentistry</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/tooth.svg')}}" class="service-box2-img" alt="#">
                        <h3>Root Canals</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/dental.svg')}}" class="service-box2-img" alt="#">
                        <h3>Dental Cleaning</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/teeth.svg')}}" class="service-box2-img" alt="#">
                        <h3>Teeth Whitening</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-fill flex-column">
                    <div class="service-box2">
                        <img src="{{asset('assets/img/gums.svg')}}" class="service-box2-img" alt="#">
                        <h3>Teeth Fillings</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                        <a href="#">READ MORE</a>
                        <div class="service-box2-bg">
                            <img src="{{asset('assets/img/service-box-bg.png')}}" class="img-fluid w-100" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Services2 -->
@endsection