var videoElem = document.getElementById('video');
var playElem = document.getElementById('play');
var pauseElem = document.getElementById('pause');

function isFullScreen() {
  return !!(document.fullScreen ||
            document.webkitIsFullScreen ||
            document.mozFullScreen ||
            document.msFullscreenElement ||
            document.fullscreenElement);
}

function handleFullScreen() {
  if ( isFullScreen() ) {
    if (document.exitFullscreen) document.exitFullscreen();
    else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
    else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
    else if (document.msExitFullscreen) document.msExitFullscreen();
  } else {
    if (videoElem.requestFullscreen) videoElem.requestFullscreen();
    else if (videoElem.mozRequestFullScreen) videoElem.mozRequestFullScreen();
    else if (videoElem.webkitRequestFullScreen) videoElem.webkitRequestFullScreen();
    else if (videoElem.msRequestFullscreen) videoElem.msRequestFullscreen();
  }
}

playElem.onclick = function() {
  if (videoElem.paused) {
    handleFullScreen();
    videoElem.play();
  }
    
};

jQuery(function($){
$('.musicstart_one').on('click', function(){
$('.music_one')[0].play()
$('.music_one').addClass('music-active');
$('.img-okey_one').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_two').on('click', function(){
$('.music_two')[0].play()
$('.music_two').addClass('music-active');
$('.img-okey_two').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_three').on('click', function(){
$('.music_three')[0].play()
$('.music_three').addClass('music-active');
$('.img-okey_three').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_four').on('click', function(){
$('.music_four')[0].play()
$('.music_four').addClass('music-active');
$('.img-okey_four').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_five').on('click', function(){
$('.music_five')[0].play()
$('.music_five').addClass('music-active');
$('.img-okey_five').addClass('img-okey-js');
});
});


