@extends('index')
@section('content')
<div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">{{$lab->name}}</h4>
    <p class="card-text">{{$lab->address}}</p>
    <p class="card-text">{{$lab->state}}</p>
    <p class="card-text">{{$lab->email}}</p>
      <a href={{ url('book/' . $lab->id) }} class="btn btn-primary">Book</a>
    </div>
  </div> 
@endsection