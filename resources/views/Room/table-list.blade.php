@extends('layouts.app')

@section('title')
Room Details
@endsection

@section('content')
     <section class="container-fluid">
         <div class="row">
            <div class="col-md-offset-2 col-md-8 col-xs-12">
                <h2 class="alignment-center">
                    Room Details
                </h2>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="warning">
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Description</thh>
                            <th>RoomType</th>
                            <th>Price</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{  $room->id }}</td>
                                <td>{{  $room->name }}</td>
                                <td>{{ $room->description }}</td>
                                <td>{{ $room->roomType }}</td>
                                <td>{{ $room->price }}</td>
                                <td>
                                    <a href="{{ url('/room/edit/'.$room->id) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['url'=>'/room/delete/'.$room->id,'method'=>'POST']) !!}                                  
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
          <div class="text-center" >
            <a href="{{ url('/room/create') }}" class="btn btn-primary" style="margin-bottom:30px;">CREAT NEW ROOM</a>
        </div>
    </section>
@endsection