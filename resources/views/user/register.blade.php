@extends('index')
@section('content')
@include('notification.messages')
{!! Form::open(['action' => 'UserController@register','method' => 'POST']) !!}
<div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Name'])}}
</div>  
<div class="form-group">
            {{Form::label('email', 'E-Mail')}}
            {{Form::email('email', '',['class'=>'form-control','placeholder'=>'E-mail'])}}
    </div>
    <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password',['class'=>'form-control'])}}
    </div>
    {{Form::submit('Register',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection