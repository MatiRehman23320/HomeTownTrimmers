@extends('layouts.app')
@section('page_title')
   POST-Barber
@endsection
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <title>barber_dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css2/style.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebar')
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <h2 class="mb-4">Welcome Dear Barber!</h2>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="{{route('create')}}" enctype="multipart/form-data" class="p-3">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Shop_Name">Shop Name</label>
                                    <input type="text" class="form-control" id="Shop_Name" placeholder="Shop Name" name="Shop_Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Barber_Name">Barber Name</label>
                                    <input type="text" class="form-control" id="Baeber_Name" placeholder="Barber_Name" name="Barber_Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Address">Address</label>
                                    <input type="text" class="form-control-file" name="address" id="Address" placeholder="Enter the address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Browser your shop's image</label>
                                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlFile1">Discription</label>
                                    <textarea type="text" class="form-control" name="description" id="permission_reason" cols="80"  autocomplete="off"   placeholder="Enter Details"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="lat">latitude</label>
                                    <input type="text" class="form-control" id="lat" readonly name="lat">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lng">longitude</label>
                                    <input type="text" class="form-control" id="lng" readonly name="lng">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<script src="assets/js2/jquery.min.js"></script>
<script src="assets/js2/popper.js"></script>
<script src="assets/js2/bootstrap.min.js"></script>
<script src="assets/js2/main.js"></script>
</body>
</html>
<script>


    $(document).ready(function() {
        var x = navigator.geolocation;
        x.getCurrentPosition(loadMap);
        function loadMap(position) {
            var myLat = position.coords.latitude;
            var myLng = position.coords.longitude;
            document.querySelector('#lat').value=myLat;
            document.querySelector('#lng').value=myLng;
        }
    });


</script>

@endsection
