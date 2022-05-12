@extends('layouts.app')
@section('page_title')
   View-Barber-Appointments
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
        <h2 class="mb-4">View Barber Appointments</h2>
        <div class="container">
            @if($no_of_pending==0)
                <div class="alert-appintment">
                    <span class="closebtn-appintment" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong> OPPS! </strong> NO Appointment AVAILABLE YET.
                </div>
            @else

                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Time</th>
                        <th>Address</th>
                        <th>Status</th>
                      </tr>
                    @foreach($pending_appointments as $i)
                        <tr>
                            <td>ABK</td>
                            <td>10:00 pm</td>
                            <td>BILAL GUNJ</td>
                            <td>Pending</td>
                        </tr>
                    @endforeach
                </table>
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
