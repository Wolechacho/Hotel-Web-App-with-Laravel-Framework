@extends('layouts.master')
@section('title')
List
@endsection

@section('content')
    <div class="container">
        <section class="row after-nav-margin-top">
            @foreach($rooms as $room)
                <div class="col-md-4 room-margin-bottom">
                    <div class="white-background">
                        <div><img src="{{ asset('storage/upload/'.$room->imageUrl) }}" alt="" class="img-responsive"></div>
                        <div class="alignment-center">
                            <h3>{{$room->name}}</h3>
                            <p>{{$room->description}}</p>
                            <p>{{$room->roomType}}</p>
                            <p class="fontBold">{{$room->price}}</p>
                            <p>
                                <a href="{{ asset('customer/book/'.$room->id) }}" class="btn btn-danger">BOOK</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </section>
         <div class="alignment-center">
                {{$rooms->links()}}
            </div>
    </div>
@endsection