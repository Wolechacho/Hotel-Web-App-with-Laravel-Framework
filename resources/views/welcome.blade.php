@extends('layouts.master')

@section('title')
Welcome
@endsection

@section('content')
    <section class="nav-margin">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

             <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('img/collins-hotel-10.jpg') }}" alt="room">
                    <div class="carousel-caption">
                        <h4>A Nice place to be</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/riviera.jpg') }}" alt="room">
                    <div class="carousel-caption">
                        <h4>The Best Hotel you would ever visit</h4>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('img/comfy.jpg') }}" alt="room">
                    <div class="carousel-caption">
                        <h4>Room with the best view</h4>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="container">
            <h3 class="text-center">WHAT WE OFFER</h3>
            <hr>
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="card">
                       <div class="text-center icon-para">
                            <i class="fa fa-heart"></i>
                        </div>
                        <p class="text-center">
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum 
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="card">
                        <div class="text-center icon-para">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <p class="text-center">
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum 
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="card">
                        <div class="text-center icon-para">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <p class="text-center">
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum 
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="card">
                        <div class="text-center icon-para">
                            <i class="fa fa-star"></i>
                        </div>                      
                        <p class="text-center">
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum 
                        </p>
                    </div>
                </div>
            </div>
         </div>
          <div id="message" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#message" data-slide-to="0" class="active"></li>
                <li data-target="#message" data-slide-to="1"></li>
                <li data-target="#message" data-slide-to="2"></li>
            </ol>

             <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('img/04.jpg') }}" alt="room">
                    <div class="carousel-caption">
                        <q>Saphhire hotel is the best in the world</q>
                        <p>Brian Adams</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/04.jpg') }}" alt="room">
                    <div class="carousel-caption">
                         <q>Have the best room with best view</q>
                        <p>Julie Lerman</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('img/04.jpg') }}" alt="room">
                    <div class="carousel-caption">
                        <q>Best room that keeps you coming</q>
                        <p>Bob Jack</p>
                    </div>
                </div>
            </div>
         </div>

    </section>
   
@endsection