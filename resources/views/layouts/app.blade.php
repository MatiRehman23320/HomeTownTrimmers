<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
		<title>
			@if (trim($__env->yieldContent('page_title')))
				@yield('page_title') | HTT
			@else
			Home-Town-Trimmer
			@endif
		</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Favicon-->
    <link rel="icon" href="assets/img/icon.png" type="image/jpg" />
    <!-- Bootstrap CSS -->
{{--    <link href="assets/css/bootstrap.min.css" rel="stylesheet">--}}

    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{ asset('assets') }}/css/font-awesome.min.css" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('assets') }}/css/line-awesome.min.css" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('assets') }}/css/animate.css" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('assets') }}/css/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets') }}/css/owl.carousel.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">

    <!-- jquery -->
    <script src="{{ asset('assets') }}/js/jquery-1.12.4.min.js"></script>
    <!-- font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b97777b688.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">





    <!-- Popper JS -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('assets') }}/js/jquery.waypoints.min.js"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
    <!-- CountDown JS -->
    <script src="{{ asset('assets') }}/js/jquery.countdown.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('assets') }}/js/jquery.sticky.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets') }}/js/main.js"></script>


</head>
<body>
<div id="app">



    <!-- Header Top Area -->

    <div class="header-top">
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col">
                    <div class="contact-info d-inline ml-3">
                        <i class="las la-envelope"></i> hometowntrimmers7@gmail.com |
                        <i class="las la-map-marker"></i> Lahore, Punjab, Pakistan
                    </div>
                </div>
                <div class="col">
                    <div class="site-info d-inline ml-3">
                        Opening Hours: Monday-Saturday - 09.00 a.m. to 10.00 p.m.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="p-0">
        @yield('content')
    </main>



</div>
</body>
@include('layouts.footer_script')
</html>
