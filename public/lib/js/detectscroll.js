function detectScroll(){
  let cwst = $(window).scrollTop(), threshold = dfThreshold;
  $(document).off("scroll.detectScroll");
  if (cwst > threshold) $(document).on("scroll.detectScroll", () => scrollUp());
  else if (cwst <= threshold) $(document).on("scroll.detectScroll", () => scrollDown());
}

function scrollUp(threshold = dfThreshold/2, cwst = $(window).scrollTop()){
  // console.log("checking up", cwst, threshold);
  if (cwst > threshold) return; // checking for scroll above threshold
  // console.log("changing to detect scroll down");
  $(".masthead-nav-wrapper").removeClass("fixed");
  $(document).off("scroll.detectScroll");
  $(document).on("scroll.detectScroll", () => scrollDown());
}

function scrollDown(threshold = dfThreshold, cwst = $(window).scrollTop()){
  // console.log("checking down", cwst, threshold);
  if (cwst <= threshold) return; // checking for scroll below threshold
  // console.log("changing to detect scroll up");
  $(".masthead-nav-wrapper").addClass("fixed");
  $(document).off("scroll.detectScroll");
  $(document).on("scroll.detectScroll", () => scrollUp());
}

// 2. This code loads the IFrame Player API code asynchronously.
/*
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";

var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('masthead-ytplayer', {
    height: '100%',
    width: '100%',
    videoId: 'Un5SEJ8MyPc',
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}
*/
