@extends('layouts.app')
@section('page_title')
   Edit POST-Barber
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
<div class="wrapper  align-items-stretch">
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <h2 class="mb-4">Edit Your post!</h2>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="POST" action="{{route('edit_post_store',$edit_post->id)}}" enctype="multipart/form-data" class="p-3">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Shop_Name">Shop Name</label>
                                    <input type="text" class="form-control" id="Shop_Name" value="{{$edit_post->Shop_Name}}" placeholder="Shop Name" name="Shop_Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Barber_Name">Barber Name</label>
                                    <input type="text" class="form-control" id="Baeber_Name" value="{{$edit_post->Barber_Name}}" placeholder="Barber_Name" name="Barber_Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Address">Address</label>
                                    <input type="text" class="form-control-file" name="address" id="Address" value="{{$edit_post->address}}" placeholder="Enter the address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Browser your shop's image</label>
                                    <input type="file" name="file" src="{{ asset(Storage::url($edit_post->file)) }}" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlFile1">Discription</label>
                                    {{-- <textarea type="text" class="form-control" name="description"  value="{{$post->description}}" id="permission_reason" cols="80"  autocomplete="off"   placeholder="Enter Details"></textarea> --}}

                                    <input type="text" class="form-control-file" id="exampleFormControlFile1" value="{{$edit_post->description}}" name="description">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <script>
                                        var x = navigator.geolocation;
                                        x.getCurrentPosition(loadMap);
                                        function loadMap(position) {
                                            var myLat = position.coords.latitude;
                                            var myLng = position.coords.longitude;
                                            document.querySelector('#lat').value=myLat;
                                            document.querySelector('#lng').value=myLng;
                                        }
                                    </script>
                                    <label for="lat">latitude</label>
                                    <input type="text" class="form-control" id="lat" value="{{$edit_post->lat}}" readonly name="lat">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lng">longitude</label>
                                    <input type="text" class="form-control" id="lng" value="{{$edit_post->lng}}" readonly name="lng">
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
@endsection
