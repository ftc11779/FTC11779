<?php
  DEFINE("CUSTOM_CSS", "./lib/css/");
  DEFINE("CUSTOM_JS", "./lib/js/");
  DEFINE("BOOTSTRAP", "./lib/vendor/bootstrap-4.1.3/");
  DEFINE("JQUERY", "./lib/vendor/jquery-3.3.1/");
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="ftc,ftc11779,ac,acftc,allendalecolumbia,allendalecolumbiaftc" />
    <meta name="description" content="FTC team #11779" />
    <meta name="author" content="parkjongwon.com" />
    <title>FTC 11779</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
  </head>

  <body>

    <div id="masthead" class="masthead container-fluid bg-img">
      <div id="masthead-nav" class="masthead-nav-wrapper">
        <div class="masthead-nav clearfix">
          <ul class="masthead-navbar">
            <li><a class="no-a masthead-brand">FTC 11779</a></li>
          </ul>
          <ul class="masthead-navbar masthead-navbar-nobrand float-right">
            <li><a href="#"><span>About</span></a></li>
            <li><a href="#"><span>Seasons</span></a></li>
            <li><a href="#"><span>Awards</span></a></li>
            <li><a href="#"><span>Sponsorship</span></a></li>
          </ul>
        </div>
      </div>
      <div class="masthead-background">
        <video width="auto" height="100%" autoplay loop muted src="./lib/vid/masthead.mp4">Your browser does not support the video tag.</video>
      </div>
      <div class="masthead-background-layer"></div>
      <div class="masthead-wrapper text-center">
        <div class="masthead-wrapper-block"></div>
        <div class="masthead-title">FTC 11779</div>
        <div class="masthead-subtitle">Allendale Columbia School</div>
        <div class="spacing vertical taller"></div>
        <div class="masthead-btn mhb-t1"><a href="#">Contact us</a></div>
        <div class="masthead-btn mhb-tfancy"><a href="#">Be a sponsor</a></div>
      </div>
    </div>
    <!-- <div id="deck">
      <div class="container-fluid">
        <div class="deck-wrapper">
          <div class="deck-text text-uppercase text-center">
            <span>Innovation,</span>
            <span>Creative Thinking,</span>
            <span>FTC 11779</span>
          </div>
          <div class="deck-image">
            <img src="./lib/img/nasa-mars-rover-twin.png" />
          </div>
        </div>
      </div>
    </div> -->
    <div id="intro" class="ftcrow">
      <div class="container">
        <div class="ctf-block ctf-popout">

        </div>
        <div class="spacing vertical tallest"></div>
        <div class="ctf-block">
          <div class="ctfi">
            <div class="ctfi-image"></div>
            <div class="ctfi-caption">
              <div class="ctfi-title">Vigorous</div>
              <div class="ctfi-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p>
      Hi! Welcome to FTC 11779
    </p>
    <p>
      We have...
    </p>
    <br />
    <div>
      <a href="#">Welcome!</a>
      <br /><br />
      <a href="#">Team name</a>
      <br /><br />
      <a href="#">School</a>
      <br /><br />
      <a href="#">Team picture</a>
      <br /><br />
      <a href="#">Nav bar</a>
      <br />
      <a href="#">sponsorship</a>
      <br />
      <a href="#">team info</a>
      <br />
      <a href="#">season highlight</a>
      <br />
      <a href="#">awards</a>
    </div>
    <br />

    <script type="text/javascript" src="<?php echo JQUERY."jquery.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo "./lib/vendor/parallax.js-1.5.0/parallax.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."home.js?v=".filemtime(CUSTOM_JS."home.js"); ?>"></script>
  </body>

</html>
