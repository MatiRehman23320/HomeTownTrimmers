{{-- @extends('layouts.app')
@section('page_title')
  Messages-Barber
@endsection
@section('content')
@include('layouts.sidebar')
<div class="container">
    <h2 style="text-align: center;margin-top: 5%; border-bottom-style: solid">Bookings!</h2>
    <div class="container mt-3 my-5">
        @foreach ($customermsg as $item)
            <div class="row mt-3">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <div class="card-header" style="background-color: #0d1e40; color: white;">
                        Name:&nbsp;&nbsp;&nbsp;   {{$item->name}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Address: &nbsp;&nbsp;&nbsp;{{$item->cus_address}}</li>
                            <li class="list-group-item">Appintment:&nbsp;&nbsp;&nbsp;{{$item->time}}</li>
                            <li class="list-group-item">Contact:&nbsp;&nbsp;&nbsp;{{$item->phone}}</li>
                            <li class="list-group-item">Appintment:&nbsp;&nbsp;&nbsp;{{$item->Day}}</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container mt-3 my-5">
                    <div class="row mt-3">
                        <div class="col">
                            <form class="kt-form" id="permit_by" action="{{ route('barber.replied',$item->id) }}" method="POST"  enctype="multipart/form-data">
                                <div class="container">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Reply</label>
                                        <textarea type="text" class="form-control" name="barber_reply" id="barber_reply" cols="70"  autocomplete="off" required  placeholder="Enter reply"></textarea>
                                    </div>
                                    <button type="submit" class="upload-button btn btn-warning">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection --}}




@extends('layouts.app')
@section('page_title')
Messages-Barber
@endsection
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css2/style.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebar')
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <h2 class="mb-4">CHAT BOX!</h2>
        @if($msg_count==0)
            <div class="alert-appintment">
                <span class="closebtn-appintment" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong> OPPS! </strong> NO APPOINTMENTS AVAILABLE YET.
            </div>
        @else
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @foreach ($customermsg as $item)
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-header" style="background-color: #0d1e40; color: white;">
                                        Name:&nbsp;&nbsp;&nbsp;   {{$item->name}}
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Address: &nbsp;&nbsp;&nbsp;{{$item->cus_address}}</li>
                                            <li class="list-group-item">Appintment:&nbsp;&nbsp;&nbsp;{{$item->time}}</li>
                                            <li class="list-group-item">Contact:&nbsp;&nbsp;&nbsp;{{$item->phone}}</li>
                                            <li class="list-group-item">Appintment:&nbsp;&nbsp;&nbsp;{{$item->Day}}</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="container mt-3 my-5">
                                    <div class="row mt-3">
                                        <div class="col">
                                            <form class="kt-form" id="permit_by" action="{{ route('barber.replied',$item->id) }}" method="POST"  enctype="multipart/form-data">
                                                <div class="container">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label>Reply</label>
                                                        <textarea type="text" class="form-control" name="barber_reply" id="barber_reply" cols="70"  autocomplete="off" required  placeholder="Enter reply"></textarea>
                                                    </div>
                                                    <button type="submit" class="upload-button btn btn-warning">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<script src="assets/js2/jquery.min.js"></script>
<script src="assets/js2/popper.js"></script>
<script src="assets/js2/bootstrap.min.js"></script>
<script src="assets/js2/main.js"></script>
</body>
</html>

@endsection
