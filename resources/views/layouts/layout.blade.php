<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sukheducator</title>
    <script data-ad-client ="ca-pub-1984007335942688" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">



        <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />

     <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
     <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
     <link rel="stylesheet" href="//path/to/videojs-seek-buttons.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<link href="https://vjs.zencdn.net/5.16.0/video-js.min.css" rel="stylesheet"/>
<script src="https://vjs.zencdn.net/5.16.0/video.min.js"></script>
<script src="https://rawgit.com/atlance01/vrapp-ionic/master/www/js/lib/videojs-playlist.js"></script>


        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    </head>
    <body>
   @include('nav.navbar')
   
   @yield('content')

   @include('footer.footer')

    </body>
</html>
