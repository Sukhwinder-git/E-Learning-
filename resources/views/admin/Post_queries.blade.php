@extends('layouts.layout')

@section('content')
<div class="container">
<form action="{{route('admin.Post_queries')}}" method="POST">
@csrf
<div class="form-group pt-5">
<label for="message">Type Any Queries</label>
<textarea class="form-control" width="200" height="200" name="message"></textarea>
<button type="submit" class="btn btn-outline-dark btn-rounded waves-effect">Submit</button>
</div>
</form>
@if(session('msg'))
  <div class="alert alert-success">
  {{session('msg') }}
  </div>
@endif

<div class="alertt alert-warning">
@foreach($queries as $information)
<p>{{ $information->message}}</p>
@endforeach
</div>
@foreach($queries as $information)
<form action="{{route('admin.Post_queries_delete',$information->id)}}" method="POST">
@endforeach
@csrf
<div class="form-group pt-5">
@method('delete')
<button class="btn btn-primary">Delete</button>
</div>
</form>
@if(session('mssg'))
  <div class="alert alert-success">
  {{session('mssg') }}
  </div>
@endif
<i class="fas fa-arrow-left">
<a class="btn btn-primary"  href="{{route('admin.dashboard')}}">Home</a>
</i>
</div>
@endsection