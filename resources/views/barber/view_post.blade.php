@extends('layouts.app')
@section('page_title')
   View-POST-Barber
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
        <h2 class="mb-4">View Barber Posts</h2>
        <div class="container">
            @if($post_count==0)
                <div class="alert-appintment">
                    <span class="closebtn-appintment" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong> OPPS! </strong> NO POST AVAILABLE YET.
                </div>
            @else
                @foreach($post_history as $i)
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <img  src="{{ asset(Storage::url($i->file)) }}" style="width:auto; height:100px">
                                        <h5 class="card-title">{{$i->Shop_Name}}</h5>
                                        <p class="card-text">{{$i->address}}</p>
                                        <a href="{{route('barber.view',$i->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i>View shop</a>
                                        <a href="{{route('edit_post_show',$i->id)}}" class="btn btn-primary"><i class="fas fa-plus"></i>Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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
