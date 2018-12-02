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
    <title>Sponsor - FTC 11779</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."sponsor.css?v=".filemtime(CUSTOM_CSS."sponsor.css"); ?>" />
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
  </head>

  <body>

    <!--

    loading screen with rocket launching

    -->

    <?php require_once "./lib/template/navs.php"; ?>

    <div id="masthead">
      <div class="masthead-header"></div>
      <div class="masthead-body">
        <div class="masthead-subtitle">FTC 11779</div>
        <div class="masthead-title"><span>Sponsor</span></div>
      </div>
      <div class="masthead-footer">
        <a class="masthead-pdf" href="#">
          <div class="masthead-pdf-icon"><img src="./lib/svg/pdf.svg" /></div>
          <div class="masthead-pdf-caption"><span>Sponsorship</span> <span>Package</span></div>
        </a>
      </div>
      <div class="masthead-connect">
        <svg viewbox="0 0 100 21">
          <path fill="#f2f2f2" opacity="0.5" d="M0 30 V15 Q30 3 60 15 V30z" />
          <path fill="#f2f2f2" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
        </svg>
      </div>
    </div>

    <div id="sponsorships" class="ss">
      <div class="ss-header">
        <div class="ss-title ss-hl bolder">Sponsorships</div>
      </div>
      <div class="ss-body">
        <div class="sr-only">Astronaut</div>
        <div class="ss-level">
          <div class="ss-level-row">
            <div class="ss-level-col ss-level-order"><span>I</span></div>
            <div class="ss-level-col ss-level-icon"><img src="./lib/svg/astronaut.svg" /></div>
            <div class="ss-level-col ss-level-name">
              <div>Astronaut</div>
              <div class="ss-level-money">for<span>$100</span></div>
            </div>
          </div>
          <div class="ss-level-row ss-level-benefits">
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content">Sponspor name is listed on our website homepage and sponsorship page</div>
            </div>
            <!-- <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content"></div>
            </div> -->
          </div>
        </div>
        <div class="sr-only">Rocket</div>
        <div class="ss-level">
          <div class="ss-level-row">
            <div class="ss-level-col ss-level-order"><span>II</span></div>
            <div class="ss-level-col ss-level-icon"><img src="./lib/svg/rocket.svg" /></div>
            <div class="ss-level-col ss-level-name">
              <div>Rocket</div>
              <div class="ss-level-money">for<span>$250</span></div>
            </div>
          </div>
          <div class="ss-level-row ss-level-benefits">
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content"><span class="colored">Astronaut</span> benefits</div>
            </div>
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content">Sponspor name is ...</div>
            </div>
          </div>
        </div>
        <div class="sr-only">Rover</div>
        <div class="ss-level">
          <div class="ss-level-row">
            <div class="ss-level-col ss-level-order"><span>III</span></div>
            <div class="ss-level-col ss-level-icon"><img src="./lib/svg/moon-rover.svg" /></div>
            <div class="ss-level-col ss-level-name">
              <div>Rover</div>
              <div class="ss-level-money">for<span>$500</span></div>
            </div>
          </div>
          <div class="ss-level-row ss-level-benefits">
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content"><span class="colored">Rocket</span> benefits</div>
            </div>
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content">Sponspor name is listed at the end of FTC 11779&apos;s video</div>
            </div>
          </div>
        </div>
        <div class="sr-only">Station</div>
        <div class="ss-level">
          <div class="ss-level-row">
            <div class="ss-level-col ss-level-order"><span>IV</span></div>
            <div class="ss-level-col ss-level-icon"><img src="./lib/svg/satellite.svg" /></div>
            <div class="ss-level-col ss-level-name">
              <div>Station</div>
              <div class="ss-level-money">for<span>$1000</span></div>
            </div>
          </div>
          <div class="ss-level-row ss-level-benefits">
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content"><span class="colored">Rover</span> benefits</div>
            </div>
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content">Sponsor name is listed on the FTC 11779 robot used in the competition</div>
            </div>
          </div>
        </div>
        <div class="sr-only">Planet</div>
        <div class="ss-level">
          <div class="ss-level-row">
            <div class="ss-level-col ss-level-order"><span>V</span></div>
            <div class="ss-level-col ss-level-icon"><img src="./lib/svg/planet.svg" /></div>
            <div class="ss-level-col ss-level-name">
              <div>Planet</div>
              <div class="ss-level-money">for<span>$2500</span></div>
            </div>
          </div>
          <div class="ss-level-row ss-level-benefits">
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content"><span class="colored">Station</span> benefits</div>
            </div>
            <div class="ss-level-benefit">
              <div class="ss-level-benefit-point"><span></span></div>
              <div class="ss-level-benefit-content">Sponsor name is listed on the FTC 11779 team apparel and goodies</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="attribute">
      <div>Some icons are made by Freepik from www.flaticon.com, licensed by CC 3.0 BY</div>
    </div>

    <script type="text/javascript" src="<?php echo JQUERY."jquery.min.js"; ?>"></script>
    <script type="text/javascript" src="./lib/vendor/scrollar-1.0.2/scrollar.js"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."ftc11779.js?v=".filemtime(CUSTOM_JS."ftc11779.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."sponsor.js?v=".filemtime(CUSTOM_JS."sponsor.js"); ?>"></script>
  </body>

</html>
