 @extends('layouts.layout')

         @section('content')
     <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif  -->

            <div class="content">
           <div class="head font-weight-bold text-white font-cursive   " >{SukhEducator<Small class="domain">.com</Small>}</div>  
                                                                                
                                                                                                          
                
            </div>
                   

   <section class="tips container-sm ">
    <h3 class="shadow-lg  p-5 mt-4 bottom" > I WOULD RECOMMEND FOR THESE FOUR TIPS EVERYONE SHOULD KNOW BEFORE GET STARTED LEARN</h3>
    <div class="row pt-5 ml-3">
        <div class="col-sm-3 ">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen mt-3" style="font-size:30px;color:orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
      <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
      <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
       </svg>
            <h3 class="text-uppercase pt-3">You learn by doing </h3>
            <p class="mt-4 important-line mb-3">don’t waste your time on social media by  reading message about programming .There is a simple quote to become good developer -First Learn Then Do .The only way to get better at programming is to actually program. </p>
        </div>
        <div class="col-sm-3 ">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-date mt-3" style="font-size:30px;color:orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
     <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
     <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
    </svg>
            <h3 class="text-uppercase pt-3">Programmers learn daily </h3>
            <p class="mt-4 important-line mb-3">New technologies come out all the time, so the programmers that succeed are the ones who continue to learn and develop their craft on an ongoing basis.</p>
        </div>
        <div class="col-sm-3 ">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile mt-3"  style="font-size:30px;color:orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
     <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
     <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>
            <h3 class="text-uppercase pt-3">learn with focus  </h3>
            <p class="mt-4 important-line mb-3">don't scram the code because coding is a fun .Learn programming step by step don’t skip anything to become a good developer</p>
        </div>
        <div class="col-sm-3 ">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-terminal-fill mt-3"   style="font-size:30px;color:orange" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm-6.354-.354L4.793 6.5 3.146 4.854a.5.5 0 1 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708z"/>
     </svg>
            <h3 class="text-uppercase pt-3">solve problem </h3>
            <p class="mt-5 important-line mb-3"> solve the problems yourself to become a genius in programming. If you can’t solve problem then go to the google .goggle has every solution of problems but first you do </p>
        </div>
    </div>
        </div>
</section>

<section>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade mb-5 mt-5" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{ asset('/images/iswanto-arif-PFTvPyTe8UU-unsplash.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive text-white font-weight-bold">Knowledge Is Power</h3>
        <p class="text-white font-weight-bold">Learn Now</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('/images/kelly-sikkema-YK0HPwWDJ1I-unsplash.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive font-weight-bold">Talk Is Cheap</h3>
        <p class="font-weight-bold">Show Me The Code</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('/images/max-duzij-qAjJk-un3BI-unsplash.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive font-weight-bold">Experience Is The Name</h3>
        <p class="font-weight-bold">Everyone Gives There</p>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('/images/fatos-bytyqi-Agx5_TLsIf4-unsplash.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive font-weight-bold">Code Never Lies</h3>
        <p  class="font-weight-bold">Comment Sometimes Do</p>
      </div>
    </div>
   
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{ asset('/images/patrick-amoy-0Vc8UJenzm0-unsplash.jpg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive font-weight-bold">Make It Work,Make It Right</h3>
        <p class="font-weight-bold">Make It Fast</p>
      </div>
    </div>

    
  </div>

  
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="display-4 ">
<i class="fas fa-arrow-down mt-4">Choose Courses</i>
</div>
</section>


<section class="mt-5">
<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 text-center" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating " href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner  v-2" role="listbox">

    <div class="carousel-item active">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="{{ asset('/images/html5.png')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn Html 5</h4>
            <p class="card-text">HTML5 is a markup language used for structuring and presenting content 
            on the World Wide Web. It is the fifth and latest major version of HTML </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{ route('html')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
      <div class="card mb-2">
      <img class="card-img-top" src="{{ asset('/images/css.jpeg')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn css 3</h4>
            <p class="card-text">Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a 
            document written in a markup language. CSS3 is a latest standard of css </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{route('css')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
      <div class="card mb-2">
      <img class="card-img-top" src="{{ asset('/images/jquery.png')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn Jquery</h4>
            <p class="card-text">Query is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation,
             as well as event handling, CSS animation, and Ajax. </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{route('jquery')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
      <div class="card mb-2">
      <img class="card-img-top" src="{{ asset('/images/bootstrap.jpeg')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn Bootstrap 4</h4>
            <p class="card-text">Bootstrap is a free and open-source CSS framework directed at responsive, 
            mobile-first front-end web development. It contains CSS- and JavaScript- </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{route('bootstrap')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
      <div class="card mb-2">
      <img class="card-img-top" src="{{ asset('/images/php.png')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn Php</h4>
            <p class="card-text">PHP is a popular general-purpose scripting language that is especially suited to web development.
             It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994 </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{route('php')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
        <img class="card-img-top" src="{{ asset('/images/laravel.png')}}"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Learn Laravel</h4>
            <p class="card-text">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications
             following the model–view–controller architectural pattern and based on Symfony. </p>
            <a class="btn btn-primary btn-md btn-rounded" href="{{route('laravel')}}">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
</section>
<section>

<div class="display-3 ml-4 pt-5">About <i class="fab fa-medium-m">e</i></div>
<!-- Grid row -->
<div class="row">



  <!-- Grid column -->
  <div class="col-xl-5 col-md-4 mb-3 text-center">

    <img src="{{ asset('/images/sukhwinder.jpg')}}" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image" style="height:350px;width:300px">

  </div>
      <!-- Grid column -->
 <div class="col-xl-5 col-md-4 mb-3 text-center">
      <h2 class="mt-4 pt-4 " style="font-size:45px">Sukhwinder Singh</h2>
      <p class="text-capitalize font-weight-light lead" style="text-align:justify">“ my name is sukhwinder singh.i am from india.my task is only for those students who wanna to become full stack web developer .i loved programming.i have been programmmer for last three years.i would recommend for learn it from beginning .don't skip anything.
  ”</p>

   </div>
   </div>
   <!-- Grid row -->


   
   </section>


 


   @endsection