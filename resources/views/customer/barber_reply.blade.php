@extends('layouts.app')

@section('content')
@php
$name=Auth::user()->name;
    
@endphp

        <div class="col">

            <div class="card">
                <div class="card-header">
                    Replying
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Hi dear <b>{{$name}}!</b> Thanks for booking. i'm your barber. i will be on time at your given place.</p>
                        <p><b>{{$barber_reply_to_customer->barber_reply}}</b></p>

                        <footer class="blockquote-footer">“Happy to help!” ...</footer>
                    </blockquote>
                </div>
            </div>



        </div>



@endsection
