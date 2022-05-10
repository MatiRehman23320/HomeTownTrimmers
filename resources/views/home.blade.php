@extends('layouts.app')
@section('page_title')
   Home-Page
@endsection
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> Home Town Trimmer</title>


</head>
<body>


<!-- Pre-Loader -->
<div id="loader">
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>

@include('layouts.navbar')

<!-- Hero Area -->

<div class="homepage-slides owl-carousel">
    <div class="single-slide-item">
        <div class="overlay"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="section-title">
                            <h1>Find the best  <br> barbers in Town.</h1>
                            <p> Professional Beauty Services at Home <br> just on single click.</p>
                        </div>
                        <a href="#" class="main-btn transparent">Learn More</a>
                        <a href="{{route('Book_appointment')}}"  class="main-btn">Book appointment <i class="fa-solid fa-handshake"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-slide-item hero-area-bg-2">
        <div class="overlay"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="section-title">
                            <h1>Hire the best<br> barbers in Town.</h1>
                            <p> Professional Beauty Services at Home <br> just on single click.</p>
                        </div>
                        <a href="#" class="main-btn transparent">Learn More</a>
                        <a href="{{route('Book_appointment')}}" class="main-btn">Book appointment <i class="fa-solid fa-handshake"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- barber list--}}
{{--
<div class="container">
    @foreach($show as $i)
        <div class="row mt-3">
        <div class="col">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                      <img  src="{{ asset(Storage::url($i->file)) }}" style="width:auto; height:100px">
                        <h5 class="card-title">{{$i->Shop_Name}}</h5>
                        <p class="card-text">{{$i->address}}</p>
                    <a href="{{route('chat',$i->id)}}" class="btn btn-primary">Message</a>
                </div>
            </div>
        </div>
        </div>
    @endforeach
</div> --}}

{{--                                        -----------------------------------end post------------------------------------}}





<!-- About Section-->

<div class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="info-content-area">
                    <div class="section-title">
                        <h2>Professional Beauty
                            <b>Services at Home</b> </h2>
                    </div>
                    <p>The ultimate in comfortable, convenient, and professional beauty salon services at home. GharPar is a mobile app and web based solution providing women with high quality, hygienic, and timely at-home beauty services.</p>
                    <p class="highlight">You need to look good and feel good.</p>
                    <p class="highlight">We give you satisfaction with dedication. </p>
                    <p class="highlight">Book your kit , and enjoy the services.</p>
                    <div class="founded">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="assets/img/founder-bg.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="founded-text">
                                    <p>We have 15+ years Experience in Providing Services as a barber.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="info-img">
                    <img src="assets/img/about/1.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Achievement Section -->

<div class="achievement-area section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="service-icon">
                        <i class="fas fa-chair"></i>
                    </div>
                    <p class="counter-number"><span>36</span></p>
                    <h6>Total Barbers</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="service-icon">
                        <i class="flaticon-teacher"></i>
                    </div>
                    <p class="counter-number"><span>5</span>k+</p>
                    <h6>Enrolled customer</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="counter-number"><span>255</span>+</p>
                    <h6>Servises Included</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <div class="service-icon">
                        <i class="flaticon-clipboard"></i>
                    </div>
                    <p class="counter-number"><span>86</span>+</p>
                    <h6>Event Arranged</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Programme Section -->

<!-- Courses Section -->


<!-- Feature Section-->

<div class="feature-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title">
                    <h2> We manage & organized <b>Quality </b> Services</h2>
                </div>
                <div class="single-feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-earth-globe"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Global Certificate</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, Lorem ipsum
                            dolor sit amet.!</p>
                    </div>
                </div>
                <div class="single-feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-mortarboard"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Alumni Support</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, Lorem ipsum
                            dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Facial Treatment</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, Lorem ipsum
                            dolor sit amet.!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="feature-image">
                    <img src="assets/img/1-feature.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="las la-angle-up"></i></a>

@include('layouts.footer')

@include('layouts.bottom_footer')

</body>
</html>

@endsection
