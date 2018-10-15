@extends('index')
@section('content')
{!! Form::open(['action' => 'LabController@searchLab','method' => 'POST']) !!}
<div class="form-group">
        {{Form::label('lab', 'Search')}}
        {{Form::text('lab', '',['class'=>'form-control','placeholder'=>'Lab'])}}
</div>
{{Form::submit('Search',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<br/>
@foreach ($labs as $item)
<div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">{{$item->name}}</h4>
    <p class="card-text">{{$item->address}}</p>
    <p class="card-text">{{$item->mobile}}</p>
      <a href="{{ url('book/' . $item->id) }}" class="btn btn-primary">Book</a>
      <a href="{{ url('view/' . $item->id) }}" class="btn btn-primary">View</a>
    </div>
  </div>   
@endforeach
@endsection