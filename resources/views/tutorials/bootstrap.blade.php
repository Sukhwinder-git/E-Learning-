@extends('layouts.layout')
<title>Learn Bootstrap</title>
@section('content')
<div class="container ">
<div class="display-4 text-center"> Learn Bootstrap</div>
<p class="font-weight-bolder mt-3"style="font-size:35px">Bootstrap is a free front-end framework for faster and easier web development.</p>
<div class="display-4 mt-4" style="font-size:35px">what is BOOTSTRAP??</div>
<p>Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins
Bootstrap also gives you the ability to easily create responsive designs</p>
<div class="alertt alert-warning">
@foreach($queries as $information)
<p class="display-4">{{ $information->message}}</p>
@endforeach
</div>
<video id="player" class="video-js vjs-default-skin container mt-5" controls width="640px" height="250px"></video>
<button class="previous btn btn-outline-info mt-3">Previous</button>
<button class="next  btn  btn-outline-info  mt-3">Next</button> 
<!-- tutorials playlist -->
<div class="display-3 mt-5">Playlist</div>
<div class="list-group font-weight-bold ">
@foreach($Bootstrap as $video)
  <a href="{{  asset('/Bootstrap/' . $video->Bootstrap)}}" class="list-group-item list-group-item-action">{{  $video->Bootstrap }}</a>
@endforeach
  </div>

<!-- <button class="jump  btn  btn-outline-info">Play Third</button> -->
<script>
// https://github.com/brightcove/videojs-playlist/blob/master/docs/api.md
@foreach($Bootstrap as $video)
var videoList = [{
  sources: [{
    src: "{{  asset('/Bootstrap/' . $video->Bootstrap)}}",
    type: 'video/mp4'
  }],
  poster: "{{  asset('/images/bootstrap.jpeg')}}"
}];
@endforeach
var player = videojs(document.querySelector('video'), {
  inactivityTimeout: 0
});
try {
  // try on ios
  player.volume(1);
  // player.play();
} catch (e) {}
//player.playlist(videoList, 4);/// play video 5
player.playlist(videoList);
document.querySelector('.previous').addEventListener('click', function() {
  player.playlist.previous();
});
document.querySelector('.next').addEventListener('click', function() {
  player.playlist.next();
});
// document.querySelector('.jump').addEventListener('click', function() {
//   player.playlist.currentItem(2); // play third
// });

player.playlist.autoadvance(0); // play all

Array.prototype.forEach.call(document.querySelectorAll('[name=autoadvance]'), function(el) {
  el.addEventListener('click', function() {
    var value = document.querySelector('[name=autoadvance]:checked').value;
    //alert(value);
    player.playlist.autoadvance(JSON.parse(value));
  });
});

/* ADD PREVIOUS */
var Button = videojs.getComponent('Button');

// Extend default
var PrevButton = videojs.extend(Button, {
  //constructor: function(player, options) {
  constructor: function() {
    Button.apply(this, arguments);
    //this.addClass('vjs-chapters-button');
    this.addClass('icon-angle-left');
    this.controlText("Previous");
  },

  // constructor: function() {
  //   Button.apply(this, arguments);
  //   this.addClass('vjs-play-control vjs-control vjs-button vjs-paused');
  // },

  // createEl: function() {
  //   return Button.prototype.createEl('button', {
  //     //className: 'vjs-next-button vjs-control vjs-button',
  //     //innerHTML: 'Next >'
  //   });
  // },

  handleClick: function() {
    console.log('click');
    player.playlist.previous();
  }
});

/* ADD BUTTON */
//var Button = videojs.getComponent('Button');

// Extend default
var NextButton = videojs.extend(Button, {
  //constructor: function(player, options) {
  constructor: function() {
    Button.apply(this, arguments);
    //this.addClass('vjs-chapters-button');
    this.addClass('icon-angle-right');
    this.controlText("Next");
  },

  handleClick: function() {
    console.log('click');
    player.playlist.next();
  }
});

// Register the new component
videojs.registerComponent('NextButton', NextButton);
videojs.registerComponent('PrevButton', PrevButton);
//player.getChild('controlBar').addChild('SharingButton', {});
player.getChild('controlBar').addChild('PrevButton', {}, 0);
player.getChild('controlBar').addChild('NextButton', {}, 2);
//player.controlBar.addChild('SharingButton', {}, 6);

//var MyButton = player.controlBar.addChild(new MyButtonComponent(), {}, 6);

//const ControlBar = videojs.getComponent('ControlBar');
//ControlBar.prototype.options_.children.splice(ControlBar.prototype.options_.children.length - 1, 0, 'SharingButton');

// Register the new component
//videojs.registerComponent('SharingButton', SharingButton);
//player.getChild('controlBar').addChild('SharingButton', {});


</script>

</div>
  
@endsection