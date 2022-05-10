@extends('layouts.app')
    @section('page_title')
        Booking page
    @endsection

@section('content')

    <div class="container">
        <h2 style=" text-align: center;margin-top: 5%; ">Book My Appointment With This Details</h2>
        <div class="row d-flex justify-content-center">
            @foreach($chat as $i)
                <div class="col-8 mt-3" style="border-style: inset;">
                    <form action="{{route('msgToBarber',$i->id)}}" method="POST">
                        @csrf
                        <div class="container mt-5">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control name" id="name" placeholder="Your Name" name="name">
                                <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid company-save-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="company-save-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Name</p>
							</div>
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <input  type="text" class="form-control address" placeholder="Your Address" name="cus_address">
                                <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid address-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class=" address-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Address</p>
							</div>
                            </div>
                            <div class="form-group">
                                <label>Day:</label>
                                <input  class="form-control day" id="bday-month" type="date" name="day" value="2021-01">
                                <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid day-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class=" day-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Address</p>
							</div>
                            </div>
                            <div class="form-group">
                                <label>Time:</label>
                                <input   class="form-control time" type="time" placeholder="Set Time" name="time">
                                <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid time-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class=" time-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Address</p>
							</div>
                            </div>
                            <div class="form-group">
                                <label>Contact Number:</label>
                                <input  class="form-control contactnumber"  type="number" placeholder="Your contact number" name="phone">
                                <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid contactnumber-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class=" contactnumber-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Address</p>
							</div>
                            </div>
                        </div>

                        <button type="submit" class="main-btn reasign-done">Send Details</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script>
	$(document).ready(function () {
		$('.reasign-done').click(function () {
		

			var name = $('.name').val();
			if (name == '') {
				$('.reasign-done').attr('type', 'button');
				$('.company-save-error').show();
				$('.name').css("border", "1.5px solid #E0B719");
				$('.name').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.company-save-error').hide();
				$('.name').css("border", "1.5px solid #37B34A");
				$('.name').css("background", "white");
			}

			var address = $('.address').val();
			if (address == '') {
				$('.reasign-done').attr('type', 'button');
				$('.address-error').show();
				$('.address').css("border", "1.5px solid #E0B719");
				$('.address').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.address-error').hide();
				$('.address').css("border", "1.5px solid #37B34A");
				$('.address').css("background", "white");
			}

			var day = $('.day').val();
			if (day == '') {
				$('.reasign-done').attr('type', 'button');
				$('.day-error').show();
				$('.day').css("border", "1.5px solid #E0B719");
				$('.day').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.day-error').hide();
				$('.day').css("border", "1.5px solid #37B34A");
				$('.day').css("background", "white");
			}

			var time = $('.time').val();
			if (time == '') {
				$('.reasign-done').attr('type', 'button');
				$('.time-error').show();
				$('.time').css("border", "1.5px solid #E0B719");
				$('.time').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.time-error').hide();
				$('.time').css("border", "1.5px solid #37B34A");
				$('.time').css("background", "white");
			}
			var contactnumber = $('.contactnumber').val();
			if (contactnumber == '') {
				$('.reasign-done').attr('type', 'button');
				$('.contactnumber-error').show();
				$('.contactnumber').css("border", "1.5px solid #E0B719");
				$('.contactnumber').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.contactnumber-error').hide();
				$('.contactnumber').css("border", "1.5px solid #37B34A");
				$('.contactnumber').css("background", "white");
			}

			
		

			
		});
	});
</script> 
@endsection
