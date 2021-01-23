@extends('layouts.layout')

@section('content')
<div class="container">
<table class="table  table-responsive-sm table-bordered mt-5 container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  @foreach($shows as $info)
    <tr>
      <td>{{ $info->id }}</td>
      <td>{{ $info->name }}</td>
      <td>{{ $info->email }}</td>
      <td>{{ $info->subject }}</td>
      <td>{{ $info->message }}</td>
    </tr>
    @endforeach 
  </tbody>

</table>

{{ $shows->links() }}



<i class="fas fa-arrow-left">
<a class="btn btn-primary"  href="{{route('admin.dashboard')}}">Home</a>
</i>
</div>






@endsection