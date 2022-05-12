@extends('layouts.app')
<style>
    .bg-color-container{
        background-color: #89c1e7;
    }
</style>
@section('page_title')
Barbers-List
@endsection
@section('content')
@include('layouts.navbar')
<h2 class="mb-4">View Barbers List</h2>
<div class="container bg-color-container">
    @foreach($barbers as $i)
    <div class="row mt-3">
        <div class="col p-2">
            <div class="card border border-success" style="width: 100%;">
                <div class="card-body">
                  <img  src="{{ asset(Storage::url($i->file)) }}" style="width:10rem; height:5rem">
                    <h5 class="card-title">{{$i->Shop_Name}}</h5>
                    <p class="card-text">{{$i->address}}</p>
                    <p class="card-text">{{$i->description}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection
