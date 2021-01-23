@extends('layouts.layout')

@section('content')
<div class="display-4 text-center mt-3" style="border:2px solid black;color:white;background-color:black">ADMIN PANEL</div>
<Div class="container">


<table class="table table-responsive-sm table-bordered mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Role_id</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($shows as $info)
    <tr>
      <td>{{ $info->id }}</td>
      <td>{{ $info->role_id }}</td>
      <td>{{ $info->name }}</td>
      <td>{{ $info->username }}</td>
      <td>{{ $info->email }}</td>
    </tr>
    @endforeach 
  </tbody>

</table>



<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Html'}}">Html Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Css'}}">Css Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Bootstrap'}}">Bootstrap Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Php'}}">Php Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Jquery'}}">Jquery Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Laravel'}}">Laravel Video</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/contact_us'}}">contact_us</a><br>
<a class="btn btn-outline-dark btn-rounded waves-effect" href="{{'dashboard/Post_queries'}}">queries</a>
</Div>
@endsection