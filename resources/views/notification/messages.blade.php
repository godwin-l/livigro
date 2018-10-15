@if(count($errors))
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
    {{$error}}
    </div>        
    @endforeach
@endif

@if($success)
<div class="alert alert-success">
        {{$success}}
        </div>  
@endif

@if($error)
<div class="alert alert-danger">
        {{$error}}
        </div>  
@endif