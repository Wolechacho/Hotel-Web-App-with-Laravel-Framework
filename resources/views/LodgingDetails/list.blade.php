@extends('layouts.app')

@section('title')
Customer Details
@endsection

@section('content')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Update LogOut Date</h4>
                </div>
                <div>
                    {!! Form::open(['url'=> '/customer/update','method'=> 'post']) !!}
                        <div class="modal-body">           
                            {!! Form::text('logOutDate',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close</button>
                            {!! Form::submit('Update',['class'=> 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!} 
                </div>
                
        </div>
  </div>
</div>


    <section class="container-fluid">
         <div class="row">
        <div class="col-md-offset-1 col-md-9 col-xs-12">
            <h2 class="alignment-center">
                Lodge Details
            </h2>
            <hr style="color:#9954bb;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="info">
                        <th>FullName</th>
                        <th>Email</thh>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>LogInDate</th>
                        <th>LogOutDate</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lodgeDetails as $details)
                        <tr>
                            <td>{{  $details->fullName }}</td>
                             <td>{{ $details->email }}</td>
                             <td>{{ $details->gender }}</td>
                             <td>{{ $details->age }}</td>
                             <td>{{ $details->status }}</td>
                             <td>{{ $details->logInDate }}</td>
                             <td>{{ $details->logOutDate }}</td>
                             <td>
                                <a href="{{ url('/customer/edit/'.$details->id) }}" class="btn btn-primary">
                                    Edit
                                </a>
                             </td>
                             <td>
                                {!! Form::open(['url'=>url('/customer/delete/'.$details->id),'method'=>'Post']) !!}
                                    {{ method_field('DELETE') }}
                                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                             </td>
                             <td>
                                <a class="btn btn-success" href="{{ url('/customer/room/'.$details->room_id) }}">
                                   More Details
                                </a>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>
   
@endsection