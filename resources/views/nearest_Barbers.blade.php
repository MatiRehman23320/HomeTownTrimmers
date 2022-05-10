@extends('layouts.app')
@section('page_title')
  Available for Booking
@endsection
@section('content')

    <div class="container">
        <h2 style="text-align: center;margin-top: 5%; border-bottom-style: solid">Here is Avalable Bookings</h2>
        <div class="row">
            <div class="container">
                @foreach($data as $i)
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <img  src="{{ asset(Storage::url($i->file)) }}" style="width:auto; height:100px">
                                        <h5 class="card-title">{{$i->Shop_Name}}</h5>
                                        <p class="card-text">{{$i->address}}</p>
                                    <a href="{{route('view',$i->id)}}" class="btn btn-primary"> <i class="fas fa-eye"></i> View</a>    <a href="{{route('chat',$i->id)}}" class="btn btn-primary"><i class="fas fa-sms"></i> Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>









@endsection
