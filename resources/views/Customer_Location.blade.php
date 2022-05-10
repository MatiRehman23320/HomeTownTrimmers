@extends('layouts.app')
@section('page_title')
  Save location
@endsection
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
        <h2 style=" text-align: center;margin-top: 5%; border-bottom-style: solid">Find Nearest From the list</h2>
        <div class="row">
            <div class="col-md-12" style=" text-align: center;">
                <form action="{{route('Find')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{-- <label for="lat">latitude</label> --}}
                            <input type="hidden" class="form-control" id="lat" readonly name="lat">
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <label for="lng">longitude</label> --}}
                            <input type="hidden" class="form-control" id="lng" readonly name="lng">
                        </div>
                    </div>
                    <button type="submit" class="btn"> Find Nearest Barbers <i class="las la-map-marker"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($barbers as $i)
            <div class="row mt-3">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <img  src="{{ asset(Storage::url($i->file)) }}" style="width:auto; height:100px">
                                <h5 class="card-title">{{$i->Shop_Name}}</h5>
                                <p class="card-text">{{$i->address}}</p>
                                <a href="{{route('view',$i->id)}}" class="btn btn-primary"> <i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
