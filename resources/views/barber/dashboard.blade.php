@extends('layouts.app')
@section('page_title')
  Barber-Dashboard
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
    <div class="container-fluid p-0">

        @include('layouts.navbar')
        <div class="row" style="margin-top: -580px;margin-left: 289px;">
            <div class="col-12 d-flex">
                <div id="content" class="p-4 p-md-5">
                    <h2 class="mb-4">Welcome Dear Barber!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>


</div>
  <!-- Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profileModalLabel">Change Profile Picture</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="img1 imgparnt" style=" display: inline-block; ">
                    <div style="text-align:center;">
                        <img style=" width: auto; height: 200px;" class="profile-logo img img-thumbnail" src="{{ asset('/image/profile.png') }}">
                    </div>
                    <div style=" text-align: center;margin-top: 5px; ">
                        <label class="btn btn-info" style=" color: white;font-size: 18px;">
                            Uplaod Profile picture <input name="image" id="image" type="file" hidden accept = 'image/jpeg , image/jpg, image/gif, image/png'>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.bottom_footer')
@include('layouts.footer_script')


</body>
</html>
@endsection
