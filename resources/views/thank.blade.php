@extends('layouts.master')
@section('title')
Thank You
@endsection

@section('content')
    <div class="after-nav-margin-top  alignment-center">
            <div class="alert alert-success padder">
                <p>
                    Thank you for choosing to lodge with us
                    We hope you have a nice time
                </p>
                <div class="link-marg">
                     <a href="{{asset('/welcome')}}" class="link-pad">GO TO HOME PAGE</a>
                </div>
               
            </div>
       
    </div>
@endsection