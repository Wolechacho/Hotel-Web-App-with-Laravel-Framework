@extends('layouts.app')
@section('title')
Edit Details
@endsection

@section('content')
      <div class="container-fluid">
         <section class="row after-nav-margin-top">
            <div class="col-md-offset-3 col-md-6 col-xs-12 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">UPDATE ROOM</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/room/put','method' => 'Post','files' => 'true']) !!}
                            {{ method_field('PUT') }}
                            {!! Form::hidden('id',$room->id) !!}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',$room->name,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                
                            </div>
                            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                                {!! Form::label('description','Description') !!}
                                {!! Form::text('description',$room->description,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            </div>
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                                {!! Form::label('price','Price') !!}
                                {!! Form::text('price',$room->price,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>{{ $errors->first('price')}}</strong>
                                </span>
                            </div>
                             <div class="form-group">
                                {!! Form::label('roomType','Room Type') !!}
                                {!! Form::select('roomType',
                                ['single' => 'single','double' => 'double','master'=>'master'],$room->roomType
                                ,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                                {!! Form::file('image',null,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            </div>
                           
                            <div class="alignment-center">
                                {!! Form::submit('UPDATE',['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        {!! Form::close() !!}                   
                    </div>
                </div>
            </div>              
        </section>
    </div>
  
@endsection