<?php
  DEFINE("CUSTOM_CSS", "./lib/css/");
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

    <div id="masthead" class="masthead container-fluid bg-img text-center">
      <div class="masthead-nav">
        <ul class="masthead-navbar nav justify-content-center">
          <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
          <!-- <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li> -->
        </ul>
      </div>
      <div class="masthead-wrapper">
        <div class="masthead-title display-1">FTC 11779</div>
        <div class="masthead-subtitle h2">Allendale Columbia School</div>
        <div class="spacing vertical taller"></div>
        <div class="masthead-btn mhb-t1"><a href="#">Contact us</a></div>
        <div class="masthead-btn mhb-t2"><a href="#">Be a sponsor</a></div>
      </div>
    </div>
    <div id="deck" class="deck container-fluid">

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

    <script type="text/javascript" src="<?php echo JQUERY."jquery.min.js?v=".filemtime(JQUERY."jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js?v=".filemtime(BOOTSTRAP."js/bootstrap.min.js"); ?>"></script>
  </body>

</html>
