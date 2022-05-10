@extends('layouts.app')
@section('page_title')
   Customer-Dashboard
@endsection
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    @include('layouts.navbar')
<!-- Pre-Loader -->
<div id="loader">
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>


<!-- Hero Area -->

<div class="homepage-slides owl-carousel">
    <div class="single-slide-item">
        <div class="overlay"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="section-title">
                            <h1>Find the best  <br> Barbers in Town.</h1>
                            <p> Professional Beauty Services at Home <br> just on single click.</p>
                        </div>
                        <a href="{{route('barberreply')}}"  class="main-btn transparent">Barber Reply</a>
                        <a href="{{route('Book_appointment')}}"  class="main-btn">Book appointment </a>

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
                        <a href="{{route('barberreply')}}" class="main-btn transparent">Learn More</a>
                        <a href="{{route('Book_appointment')}}" class="main-btn">Book appointment </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--nearest barber list--}}
{{-- <table class="table my-5">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Shop Name</th>
        <th scope="col">Barber Name</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead> --}}
    {{--    <tbody>--}}
    {{--    @foreach($show as $data)--}}
    {{--        <tr>--}}
    {{--            <th scope="row">{{$data->shop_name}}</th>--}}
    {{--            <td>{{$data->barber_name}}</td>--}}
    {{--            <td>{{$data->address}}</td>--}}
    {{--            <td> <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-intervel="900">--}}
    {{--                    <div class="carousel-inner">--}}
    {{--                        @foreach(explode(',',$data->file) as $image)--}}
    {{--                            <div class="carousel-item {{$loop->first ? 'active' : ''}} ">--}}
    {{--                                <a href="{{url('image',$image)}}"download>--}}
    {{--                                    <img src="{{url('image',$image)}}"  class="w-100 h-100">--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
    {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Previous</span>--}}
    {{--                    </a>--}}
    {{--                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
    {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Next</span>--}}
    {{--                    </a>--}}
    {{--                </div></td>--}}
    {{--        </tr>--}}
    {{--    @endforeach--}}
    {{--    </tbody>--}}
{{-- </table> --}}


{{--<div class="container">--}}
{{--    <div class="row mt-5">--}}
{{--            @foreach($show as $data)--}}
{{--                 <div class="col-md-6">--}}
{{--                    <div class="card">--}}
{{--                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-intervel="900">--}}
{{--                            <div class="carousel-inner">--}}
{{--                                @foreach(explode(',',$data->file) as $image)--}}
{{--                                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">--}}
{{--                                        <a href="{{url('image',$image)}}"download>--}}
{{--                                            <img src="{{url('image',$image)}}"  class="w-100 h-100">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">{{$data->shop_name}}</h5>--}}
{{--                        <p class="card-text">{{$data->address}}</p>--}}
{{--                        <p class="card-text">{{$data->discription}}</p>--}}

{{--                    </div>--}}
{{--                    <ul class="list-group list-group-flush">--}}
{{--                        <li class="list-group-item">{{$data->barber_name}}</li>--}}
{{--                        <li class="list-group-item">Dapibus ac facilisis in</li>--}}
{{--                        <li class="list-group-item">Vestibulum at eros</li>--}}
{{--                    </ul>--}}
{{--                    <div class="card-body">--}}
{{--                        <a href="#" class="card-link">Card link</a>--}}
{{--                        <a href="#" class="card-link">Another link</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{------------------------------------end post------------------------------------}}





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

@include('layouts.footer')

@include('layouts.bottom_footer')
</body>
</html>

@endsection
