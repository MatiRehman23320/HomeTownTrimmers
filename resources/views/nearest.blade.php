@extends('layouts.app')

@section('content')
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

        <div class="container">
            <div class="row justify-content-center my-3">
                <div class="col-md-4">
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="lat">latitude</label>
                                <input type="hidden" class="form-control" id="lat" readonly name="lat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lng">longitude</label>
                                <input type="hidden" class="form-control" id="lng" readonly name="lng">
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary">Find Nearest Barbers</button>
{{--                        <a href="{{route('Find')}}" class="main-btn">{{ __('Find Nearest Barbers') }}</a>--}}

                    </form>
                </div>
            </div>
        </div>
    <h1>All registered barbers here</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Shop Name</th>
            <th scope="col">Barber Name</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
        </tr>
        </thead>


{{--         map data
    
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBovpIsxtSqMTpBMysndin00-26bcWy3YM&callback=initialize"
        async defer></script>
        <script>
            var geocoder;
            var map;
            var marker;
            function initialize(){
                var initialLat = $('#search_latitude').val();
                var initialLong = $('#search_longitude').val();
                initialLat = initialLat ? initialLat : 25.2048;
                initialLong = initialLong ? initialLong : 55.2708;
        
                var latlng = new google.maps.LatLng(initialLat, initialLong);
                var options = {
                    zoom:12,
                    center: latlng,
                };
                map = new google.maps.Map(document.getElementById("map"), options);
        
                geocoder = new google.maps.Geocoder();
                
                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    position: latlng
                });
                google.maps.event.addListener(marker, "dragend", function(){
                    var point = marker.getPosition();
                    map.panTo(point);
                    geocoder.geocode({'latLng' : marker.getPosition()}, function(results, status){
                        if(status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            marker.setPosition(results[0].geometry.location);
                            $('#search_latitude').val(marker.getPosition().lat());
                            $('#search_longitude').val(marker.getPosition().lng());
                        }
                    } );
                }); 
            }
            
            
            
            
            
            
            
            
            |*****************html****************|
            |*************************************|
            
            
            
                                    <div class="col-lg-12 col-md-12">
                                        <label>Address: </label>
                                        <div class="input-group">
                                            <input type="text" id="search_location" name="address" class="form-control" placeholder="Search for..." value="{{ old('address') }}" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary get_map" type="button" id="findOnMap">Go!</button>
                                            </div>
                                            @if ($errors->has('address'))
                                                <span class="invalid-response" role="alert">
                                                    <strong>
                                                        {{ $errors->first('address') }}
                                                    </strong>
                                                </span>
                                            @elseif ($errors->has('latitude') || $errors->has('longitude'))
                                                <span class="invalid-response" role="alert">
                                                    <strong>
                                                        Please confirm a location on map, so we can save your location.
                                                    </strong>
                                                </span>
                                            @else
                                                <span style="width: 100%; color:#6a9bb2" role="alert">
                                                    <strong>
                                                        Please enter your address and click <b>GO</b> to find your location on map.
                                                    </strong>
                                                </span>
                                             @endif
                                        </div>
                                        <div id="map" class="d-none" style="width: 100%; height:400px;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-3" style="display:none;">
                                        <div class="form-group" style="margin-top:5%">
                                            <label>Latitude:</label>
                                            <input type="text" class="form-control @if($errors->has('latitude')) invalid-field @endif" name="latitude" id="search_latitude" placeholder="Enter latitude" value="{{ old('latitude') }}">
                                            @if ($errors->has('latitude'))
                                                <span class="invalid-response" role="alert">
                                                    <strong>
                                                        {{ $errors->first('latitude') }}
                                                    </strong>
                                                </span>
                                            @else
                                                <span class="form-text text-muted">Please enter your location latitude</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Longitude:</label>
                                            <input type="text" class="form-control @if($errors->has('longitude')) invalid-field @endif" name="longitude" id="search_longitude" placeholder="Enter longitude " value="{{ old('longitude') }}">
                                            @if ($errors->has('longitude'))
                                                <span class="invalid-response" role="alert">
                                                    <strong>
                                                        {{ $errors->first('longitude') }}
                                                    </strong>
                                                </span>
                                            @else
                                                <span class="form-text text-muted">Please enter your location longitude</span>
                                            @endif
                                        </div>
                                    </div> --}}

@endsection
