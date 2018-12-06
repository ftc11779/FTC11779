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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="ftc,ftc11779,ac,acftc,allendalecolumbia,allendalecolumbiaftc" />
    <meta name="description" content="FTC team #11779" />
    <meta name="author" content="parkjongwon.com" />
    <title>Home - FTC 11779</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."home.css?v=".filemtime(CUSTOM_CSS."home.css"); ?>" />
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
      <div class="header-masthead">
      </div>
      <div class="body-masthead">
        <div class="masthead-cover">
          <div class="masthead-subtitle">FIRST Tech Challenge</div>
          <div class="masthead-title"><span>Team 11779</span></div>
          <div class="masthead-btns">
            <div class="masthead-btn masthead-btn-sponsor"><a href="sponsor.php">Sponsor Us</a></div>
          </div>
        </div>
        <div class="masthead-icons">
          <div class="masthead-icon masthead-icon-rocket">
            <img src="./lib/svg/rocket2.svg" />
          </div>
          <div class="masthead-icon masthead-icon-robot">
            <img src="./lib/svg/robot2.svg" />
          </div>
        </div>
      </div>
      <div class="block-wrapper">
        <svg viewbox="0 0 100 15" preserveAspectRatio="none">
          <path fill="#fff" d="M0 30 V11 Q30 18 55 12 T100 11 V30z" />
        </svg>
      </div>
    </div>

    <div id="bow" class="block">
      <div class="header-bow"></div>
      <div class="body-bow body-set1">
        <div class="gen-row gen-row-left">
          <div class="gen-row-col gen-row-icon"><img src="./lib/svg/astronaut3.svg" /></div>
          <div class="gen-row-col gen-row-content">
            <div class="gen-row-title">We are the <span>ACES</span></div>
            <div class="gen-row-text">As a robotics team from <a href="https://allendalecolumbia.org/" target="_blank" rel="noopener">Allendale Columbia</a>, Rochester, NY, we participate in <a href="https://www.firstinspires.org/robotics/ftc" target="_blank" rel="noopener nofollow">FIRST Tech Challenge</a>.</div>
          </div>
        </div>

        <div class="gen-row gen-row-right">
          <div class="gen-row-col gen-row-icon"><img src="./lib/svg/robot3.svg" /></div>
          <div class="gen-row-col gen-row-content">
            <div class="gen-row-title">We build <span class="yellow">awesome</span> robots</div>
            <div class="gen-row-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <div class="gen-row-footer">
              <div class="gen-row-btn yellow"><a href="about.php">About Us</a></div>
            </div>
          </div>
        </div>

        <div class="gen-row gen-row-left">
          <div class="gen-row-col gen-row-icon"><img src="./lib/svg/calendar2.svg" /></div>
          <div class="gen-row-col gen-row-content">
            <div class="gen-row-title">Our season is <span class="blue">decorative</span></div>
            <div class="gen-row-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <div class="gen-row-footer">
              <div class="gen-row-btn blue"><a href="seasons.php">Our Seasons</a></div>
            </div>
          </div>
        </div>

        <div class="gen-row gen-row-right">
          <div class="gen-row-col gen-row-icon"><img src="./lib/svg/achievement.svg" /></div>
          <div class="gen-row-col gen-row-content">
            <div class="gen-row-title">Winning is <span class="pink">part</span> of us</div>
            <div class="gen-row-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            <div class="gen-row-footer">
              <div class="gen-row-btn pink"><a href="awards.php">Our Awards</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="body-bow bow-sponsor">
        <!-- <div class="" -->
        <div class="gen-row bow-sponsor-line"></div>
        <div class="bow-sponsor-content">
          <div class="bow-sponsor-icon"><img src="./lib/svg/help.svg" /></div>
          <div class="bow-sponsor-title"><a href="sponsor.php"><span>Sponsor Us</span></a></div>
          <div class="bow-sponsor-subtitle">and be part of our <span>journey</span></div>
        </div>
      </div>
      <div class="block-wrapper">
        <svg viewbox="0 0 100 15" preserveAspectRatio="none">
          <path fill="#4412e3" d="M0 30 V11 Q30 18 55 12 T100 11 V30z" />
        </svg>
      </div>
    </div>

    <div id="deck">
      <div id="contact" class="header-deck"></div>
      <div class="body-deck body-set1">
        <!-- <div class="deck-title">Follow our <span>journey</span></div> -->
        <div class="deck-header">
          <div class="deck-icon"><img src="./lib/svg/hiking.svg" /></div>
          <div class="deck-title">Follow our <span>journey</span></div>
        </div>
        <div class="deck-body">
          <div class="deck-row">
            <div class="deck-col deck-col-name">via <a href="mailto:ftc11779@allendalecolumbia.org"><span>Email</span></a> -</div>
            <div class="deck-col deck-col-val">ftc11779@allendalecolumbia.org</div>
          </div>
          <div class="deck-row">
            <div class="deck-col deck-col-name">via <a href="tel:5853814560"><span>Phone</span></a> -</div>
            <div class="deck-col deck-col-val">585-381-4560</div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script type="text/javascript" src="./lib/vendor/scrollar-1.0.2/scrollar.js"></script> -->
    <script type="text/javascript" src="<?php echo CUSTOM_JS."ftc11779.js?v=".filemtime(CUSTOM_JS."ftc11779.js"); ?>"></script>
    <!-- <script type="text/javascript" src="<?php // echo CUSTOM_JS."home.js?v=".filemtime(CUSTOM_JS."home.js"); ?>"></script> -->
  </body>

</html>
