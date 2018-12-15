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
    <title>Awards - FTC 11779</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."nonhome.css?v=".filemtime(CUSTOM_CSS."nonhome.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."awards.css?v=".filemtime(CUSTOM_CSS."awards.css"); ?>" />
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
  </head>

  <body>

    <!--

    loading screen with rocket launching

    -->

    <?php require_once "./lib/template/navs.php"; ?>

    <div id="wrapper">

      <div id="masthead" class="block">
        <div class="block-cover pink"></div>
        <div class="block-content">
          <div class="body-masthead">
            <div class="masthead-title">Awards</div>
          </div>
        </div>
      </div>

      <div id="bow" class="block nonhome">
        <div class="block-row">
          <div class="block-row-inner filler"></div>
          <div class="block-row-inner">
            <div class="bow-title block-title">Contents will be updated very shortly.</div>
            <div class="bow-title block-title">Thank you for your patience!</div>
          </div>
          <div class="block-row-inner filler"></div>
        </div>
      </div>

      <div id="sponsor" class="block sponsorus">
        <div class="sponsorus-content">
          <div class="sponsorus-btn"><a href="sponsor.php"><span>Sponsor Us</span></a></div>
          <div class="sponsorus-cover"></div>
        </div>
      </div>

    </div>


    <script type="text/javascript" src="<?php echo CUSTOM_JS."ftc11779.js?v=".filemtime(CUSTOM_JS."ftc11779.js"); ?>"></script>
  </body>

</html>
