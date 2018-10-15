@extends('index')
@section('content')
<div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">{{$user->name}}</h4>
        <p class="card-text">{{$user->email}}</p>
        </div>
      </div>
@endsection