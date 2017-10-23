@extends('layouts.master')
@section('title')
Create
@endsection

@section('content')
    <div class="row after-nav-margin-top">
        <div class="col-md-offset-3 col-md-6 col-xs-12 col-sm-6">            
            <div class="panel panel-info">
                <div class="panel-heading">CUSTOMER DETAILS</div>
                <div class="panel-body">       
                    {!! Form::open(['url'=>'/customer/save','method'=> 'post']) !!}
                        {!! Form::hidden('room_id',$id) !!}
                        <div class="form-group {{ $errors->has('fullName') ? 'has-error' : '' }}">
                            {!! Form::label('fullName','FullName') !!}
                            {!! Form::text('fullName',null,['class'=> 'form-control']) !!}
                            <span class="help-block">
                                <strong>{{ $errors->first('fullName') }}</strong>
                            </span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('email','Email') !!}
                            {!! Form::text('email',null,['class'=> 'form-control']) !!}
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                            {!! Form::label('age','Age') !!}
                            {!! Form::text('age',null,['class'=> 'form-control']) !!}
                            <span class="help-block">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <label class="radio-inline">
                                {!! Form::radio('gender','Male') !!}
                                {!! Form::label('male','Male') !!}
                            </label>
                            <label class="radio-inline">
                                {!! Form::radio('gender','Female') !!}
                                {!! Form::label('female','Female') !!}
                            </label>                    
                        </div>
                        <div class="form-group">
                            {!! Form::label('status','Status') !!}
                            {!! Form::select('status',
                            ['single' => 'single','married' => 'married','divorced' => 'divorced']
                            ,'single',['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group {{ $errors->has('expiryDate') ? 'has-error' : '' }}">
                            {!! Form::label('expiryDate','No of Days') !!}
                            {!! Form::text('expiryDate',null,['class' => 'form-control']) !!}
                            <span class="help-block">
                                <strong>{{ $errors->first('expiryDate') }}</strong>
                            </span>
                        </div>
                        <div class="alignment-center">
                            {!! Form::submit('CREATE',['class' => 'btn btn-info form-control']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
   
@endsection