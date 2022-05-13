@extends('layouts.app')
@section('page_title')
  Barber's Shop
@endsection
@section('content')
<div class="container">
    @foreach($info as $i)
    <div class="row mt-3">
        <div class="col p-2">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                  <img  src="{{ asset(Storage::url($i->file)) }}" style="width:100rem; height:25rem">
                    <h5 class="card-title">{{$i->Shop_Name}}</h5>
                    <p class="card-text">{{$i->address}}</p>
                    <p class="card-text">{{$i->description}}</p>
                    {{-- <a href="{{route('chat',$i->id)}}" class="btn btn-primary"><i class="fas fa-sms"></i> Chat</a> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection
