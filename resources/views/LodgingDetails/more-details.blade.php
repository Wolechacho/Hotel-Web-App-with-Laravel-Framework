@extends('layouts.app')

@section('title')
More details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-xs-12">
                <div class="well" style="background-color:white;">
                    <div class="divpad" >
                        <label for="name">Name</label>
                        <span>{{ $room->name }}</span>
                    </div>
                     <div class="divpad">
                        <label for="description">Description</label>
                        <span>{{ $room->description }}</span>
                    </div>
                    <div class="divpad">
                        <label for="price">Price</label>
                        <span>{{ $room->price }}</span>
                    </div>
                    <div class="divpad">
                        <label for="roomType">RoomType</label>
                        <span>{{ $room->roomType }}</span>
                    </div>
                    <div class="text-center divpad">
                        <a href="{{ url('/customer/list') }}" class="btn btn-warning">Go back</a>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
@endsection