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
    <title>About - FTC 11779</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."about.css?v=".filemtime(CUSTOM_CSS."about.css"); ?>" />
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
  </head>

  <body>

    <!--

    loading screen with rocket launching

    -->

    <?php require_once "./lib/template/navs.php"; ?>

    <div id="masthead" class="block">
      <div class="column columnf column1 fixer-column-mhc"></div>
      <div class="column columnm column2"></div>
      <div class="column columnm columnmb column3" style="z-index:5;background-color:inherit;">
        <div class="item fixer-item-mhw">
          <div class="scrollar-masthead" data-scrollar-speed="0.3">
            <div class="word word-one"><span>the A</span></div>
            <!-- <div class="word">We</div>
            <div class="word text-uppercase"><span>Are</span></div> -->
          </div>
        </div>
        <div class="item fixer-item-mhbg fixer-item-mhbg-1 scrollar-masthead" data-scrollar-speed="0.5">
          <img class="scrollar-bow" data-scrollar-speed="0.7" src="./lib/img/i-guess-just-place.jpg" />
        </div>
      </div>
      <div class="column columnm columnmb column4">
        <div class="item fixer-item-mhw">
          <div class="scrollar-masthead" data-scrollar-speed="-0.3">
            <div class="word word-two"><span>CES</span></div>
            <!-- <div class="word">the</div>
            <div class="word text-uppercase"><span>Aces</span></div> -->
          </div>
        </div>
        <div class="item fixer-item-mhbg fixer-item-mhbg-2 scrollar-masthead" data-scrollar-speed="-0.5">
          <img class="scrollar-bow" data-scrollar-speed="0.7" src="./lib/img/just-cool-desert.jpg" />
        </div>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6 fixer-column-mhc"></div>
    </div>

    <div id="bow" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm column2"></div>
      <div class="column columnm columnmb column3">

      </div>
      <div class="column columnm columnmb column4">

      </div>
      <div class="column columnm column5">

      </div>
      <div class="column columnl column6">

      </div>
    </div>

    <!-- <div class="block">
      <div class="column columnf column1">

      </div>
      <div class="column columnm columnmb column2">

      </div>
      <div class="column columnm column3">

      </div>
      <div class="column columnm columnmb column4">

      </div>
      <div class="column columnm column5">

      </div>
      <div class="column columnl column6">

      </div>
    </div> -->


    <script type="text/javascript" src="<?php echo JQUERY."jquery.min.js"; ?>"></script>
    <script type="text/javascript" src="./lib/vendor/scrollar-1.0.2/scrollar.js"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."ftc11779.js?v=".filemtime(CUSTOM_JS."ftc11779.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."about.js?v=".filemtime(CUSTOM_JS."about.js"); ?>"></script>
  </body>

</html>
