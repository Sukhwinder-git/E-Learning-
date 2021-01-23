@extends('layouts.layout')

@section('content')
<div class="display-4 text-center mt-3" style="border:2px solid black;color:white;background-color:black">Upload Html video</div>
<div class="container mt-5">
 <form action="{{route('admin.Html_upload') }}" method="POST" enctype="multipart/form-data" >
 @csrf
 <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name="html"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01" >Choose html file</label>
  </div>
</div>
<button class="btn btn-outline-dark btn-rounded waves-effect mt-5" name="submit" type="submit">upload</button>
</form>
@if(session('msg'))
  <div class="alert alert-success">
  {{session('msg') }}
  </div>
@endif
@if(session('mssg'))
  <div class="alert alert-danger">
  {{session('mssg') }}
  </div>
@endif

@foreach($html as $info)
<form action="{{ route('admin.Html_delete',$info->id) }}"  method="post">
@endforeach 
 @csrf
<table class="table table-responsive-sm table-bordered mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Html</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($html as $info)
    <tr>
      <td>{{ $info->id }}</td>
      <td>{{ $info->Html }}</td>
     @method('delete',$info->id )
     <td><button class="btn btn-primary">delete</button></td>
    </tr>
    @endforeach 
  </tbody>
 
</table>
</form>
<i class="fas fa-arrow-left">
<a class="btn btn-primary"  href="{{route('admin.dashboard')}}">Home</a>
</i>
</div>
@endsection('content')