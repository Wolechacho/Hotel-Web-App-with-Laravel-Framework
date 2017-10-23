@extends('layouts.app')

@section('title')
Create
@endsection

@section('content')
    <div class="container-fluid">
         <section class="row after-nav-margin-top">
            <div class="col-md-offset-3 col-md-6 col-xs-12 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">CREATE NEW ROOM</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/room/store','method' => 'post','files' => 'true']) !!}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>
                                        {{ $errors->first('name') }}
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                {!! Form::label('description','Description') !!}
                                {!! Form::text('description',null,['class'=>'form-control']) !!}
                                 <span class="help-block">
                                    <strong>
                                        {{ $errors->first('description') }}
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                {!! Form::label('price','Price') !!}
                                {!! Form::text('price',null,['class'=>'form-control']) !!}
                                 <span class="help-block">
                                    <strong>
                                        {{ $errors->first('price') }}
                                    </strong>
                                </span>
                            </div>
                             <div class="form-group">
                                {!! Form::label('roomType','Room Type') !!}
                                {!! Form::select('roomType',
                                ['single' => 'single','double' => 'double','master'=>'master'],'single'
                                ,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::file('image',null,['class'=>'form-control']) !!}
                                <span class="help-block">
                                    <strong>
                                        {{ $errors->first('image') }}
                                    </strong>
                                </span>
                            </div>
                           
                            <div class="alignment-center">
                                {!! Form::submit('CREATE',['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        {!! Form::close() !!}                   
                    </div>
                </div>  
            </div>             
        </section>
    </div>
  
@endsection

