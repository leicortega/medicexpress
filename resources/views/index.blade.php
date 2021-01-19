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
    </div>
    </section>
@endsection