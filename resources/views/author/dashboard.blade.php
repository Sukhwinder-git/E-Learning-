@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> 

                <div class="card-body">
                   
                </div>
            </div> -->
            
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                 {{ session('status') }}
                </div>
                    @endif
                  
     <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ __('You are logged in!') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="display-3 pb-5 text-center">Learn Programming</div>   
        
 <div class="list-group-flush">
  <div class="list-group-item">
    <p class="mb-0"><i class="fab fa-html5 fa-2x mr-4 green  p-3 white-text rounded " aria-hidden="true"></i><a href="{{route('html')}}">Learn Html</a></p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"> <i class="fab fa-css3 fa-2x mr-4 mr-4 red p-3 white-text rounded" aria-hidden="true"></i><a href="{{route('css')}}">Learn Css</a></p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fab fa-bootstrap fa-2x mr-4 mr-4 deep-purple p-3 white-text rounded" aria-hidden="true"></i><a href="{{route('bootstrap')}}">Learn Bootstrap</a></p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fab fa-js fa-2x mr-4 mr-4 purple p-3 white-text rounded" aria-hidden="true"></i><a href="{{route('jquery')}}">Learn jQuery</a></p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fab fa-php fa-2x mr-4 mr-4 blue  p-3 white-text rounded" aria-hidden="true"></i><a href="{{route('php')}}">Learn Php</a></p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fab fa-laravel fa-2x mr-4 mr-4 red p-3 white-text rounded" aria-hidden="true"></i><a href="{{route('laravel')}}">Learn Laravel</a></p>
  </div>
  </div>
              
</div>
 </div>
</div>
@endsection
