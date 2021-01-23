<!--Navbar -->
<nav class=" navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand text-dark font-weight-bold shadow-md" href="{{'/'}}"><i class="fas fa-graduation-cap">SE</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  


  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('head')}}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Tutorials
         </a>
         <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{ route('html')}}">Html</a>
          <a class="dropdown-item" href="{{route('css')}}">Css</a>
          <a class="dropdown-item" href="{{route('bootstrap')}}">Bootstrap</a>
          <a class="dropdown-item" href="{{route('php')}}">Php</a>
          <a class="dropdown-item" href="{{route('jquery')}}">Jquery</a>
          <a class="dropdown-item" href="{{route('laravel')}}">Laravel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{'/about_us'}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{'/contact_us'}}">Contact Us</a>
      </li>
     </ul>
     <ul class="navbar-nav ml-auto nav-flex-icons">
    @if (Route::has('login'))

    @auth
       <li class="nav-item">
       <a class="btn btn-outline-dark btn-rounded waves-effect class="btn btn-outline-dark btn-rounded waves-effect " href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        <a class="btn btn-outline-dark btn-rounded waves-effect" href="{{ route('password.change')}}">change password</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
       </li>
    @else
       <li class="nav-item">
        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-rounded waves-effect ">login</a>
        </li>
    @if (Route::has('register'))
       <a href="{{ route('register') }}" class="btn btn-outline-dark btn-rounded waves-effect mr-4" >Register</a>
       @endif
    @endauth
    @endif

    </ul>
  </div>
</nav>
<!--/.Navbar -->