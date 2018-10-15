@extends('index')
@section('content')
@include('notification.messages')
{!! Form::open(['action' => 'UserController@login','method' => 'POST']) !!}
    <div class="form-group">
            {{Form::label('email', 'E-Mail')}}
            {{Form::text('email', '',['class'=>'form-control','placeholder'=>'E-mail'])}}
    </div>
    <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password',['class'=>'form-control'])}}
    </div>
    {{Form::submit('Login',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection