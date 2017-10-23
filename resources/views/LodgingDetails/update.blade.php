@extends('layouts.app')

@section('title')
Edit
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-xs-12">
                <div class="well">
                    {!! Form::open(['url' => '/customer/put','method' => 'post']) !!}
                             {{ method_field('PATCH') }}
                             {!! Form::hidden('id',$lodgeDetails->id) !!}
                             {!! Form::hidden('logOutDate',$lodgeDetails->logOutDate) !!}
                            <div class="form-group {{ $errors->has('expiryDate') ? 'has-error' :'' }}">
                                {!! Form::label('LogOutDate','LogOutDate') !!}
                                {!! Form::text('expiryDate',null,['class' => 'form-control']) !!}
                                  @if ($errors->has('expiryDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expiryDate') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center">
                                {!! Form::submit('UPDATE',['class' => 'btn btn-success']) !!}
                            </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection