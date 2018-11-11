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
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo BOOTSTRAP."css/bootstrap.min.css?v=".filemtime(BOOTSTRAP."css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo CUSTOM_CSS."ftc11779.css?v=".filemtime(CUSTOM_CSS."ftc11779.css"); ?>" />
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
  </head>

  <body>

    <!--

    loading screen with rocket launching

    -->

    <div id="nav-trigger-wrapper" class="nav-trigger-wrapper nav-trig-sensitive">
      <div class="nav-trigger">
        <img class="nav-trigger-icon" src="./lib/svg/spaceship_color.svg" alt="MENU"></img>
      </div>
      <div class="nav-extra-wrapper">
        <div class="nav-extra-btn nav-extra-btn-sponsor"><a href="./sponsor.php">Sponsor</a></div>
        <div class="nav-extra-btn nav-extra-btn-contact"><a href="./contact.php">Contact</a></div>
      </div>
    </div>

    <!-- <div id="nav" class="nav">
      <div class="nav-overlay"></div>
      <div class="nav-content">
        <ul class="nav-navbar">
          <li>Home</li>
          <li>About</li>
          <li>Seasons</li>
          <li>Awards</li>
          <li>Contact</li>
          <li>Sponsor</li>
        </ul>
      </div>
    </div> -->

    <div id="masthead" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm columnmb column2" style="z-index:5;">
        <div class="item custom-item-mhl">
          <div class="box-wrapper box-type-masthead custom-box-mhl">
            <div class="box-up"><span>F</span>IRST <span>T</span>ech <span>C</span>hallenge</div>
            <div class="box">
              <div class="box-content text-uppercase"><span>FTC </span>Team 11779</div>
            </div>
          </div>
        </div>
      </div>
      <div class="column columnm column3"></div>
      <div class="column columnm columnmb columnmbl column4" style="z-index:4;">
        <div class="item custom-item-mhv">
          <video class="scrollar-masthead" data-scrollar-speed="-0.2" width="100%" height="auto" autoplay loop muted src="./lib/vid/masthead.mp4">Your browser does not support the video tag.</video>
        </div>
        <div class="item custom-item-mhac1">
          <div class="shape square scrollar-masthead" data-scrollar-speed="0.5" style="transform:translateX(50%) rotate(45deg);"></div>
        </div>
        <div class="item custom-item-mhac2">
          <div class="shape square scrollar-masthead" data-scrollar-speed="0.2" style="transform:translateX(20%) rotate(45deg);"></div>
        </div>
        <div class="item custom-item-mhac3">
          <div class="shape square scrollar-masthead" data-scrollar-speed="0.4" style="transform:rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6"></div>
    </div>

    <div id="bow" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm column2">
        <div class="item custom-item-bww">
          <div class="scrollar-bow" data-scrollar-speed="-0.3">
            <div class="word">we</div>
            <div class="word">are</div>
            <div class="word">the</div>
            <div class="word">aces</div>
          </div>
        </div>
      </div>
      <div class="column columnm columnmb column3">
        <div class="item custom-item-bwi">
          <img class="scrollar-bow" data-scrollar-speed="0.7" src="./lib/img/sky-jar.jpg" />
        </div>
        <div class="item custom-item-bwac2">
          <div class="shape square scrollar-bow" data-scrollar-speed="-0.6" style="transform:translateX(-50%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm columnmb columnmbl column4" style="z-index:5;">
        <div class="item custom-item-bwc">
          <div class="box-wrapper box-type-masthead-nmf custom-box-bwc scrollar-bow" data-scrollar-speed="0.1">
            <div class="box">
              <div class="box-up"><img src="./lib/svg/multiple-19.svg" /></div>
              <div class="box-content">
                <div class="word"><a href="https://www.firstinspires.org/robotics/ftc" target="_blank" rel="noopener"><span>FTC</span></a> TEAM of</div>
                <div class="word"><a href="https://allendalecolumbia.org" target="_blank" rel="noopener"><span>Allendale Columbia</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="item custom-item-bwac1">
          <div class="shape square scrollar-bow" data-scrollar-speed="0.3" style="transform:rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6"></div>
    </div>

    <div id="flightdeck" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm column2"></div>
      <div class="column columnm columnmb column3" style="z-index:5;">
        <div class="item custom-item-fdt">
          <div class="box-wrapper custom-box-fdt scrollar-fd" data-scrollar-speed="-0.4">
            <div class="box">
              <div class="box-up"><img src="./lib/svg/robot.svg" /></div>
              <div class="box-content">
                We build robots with <span>innovation</span> and <span>dedication</span>
              </div>
              <div class="box-bottom">
                <div class="box-bottom-btn custom-box-fdt-btn"><a href="./about.php">about us</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="itetm custom-item-fdac1">
          <div class="shape square scrollar-fd" data-scrollar-speed="0.1" style="transform:translateX(-20%) rotate(45deg);"></div>
        </div>
        <div class="itetm custom-item-fdac3">
          <div class="shape square scrollar-fd" data-scrollar-speed="0.3" style="transform:translateX(-50%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm columnmb columnmbl column4">
        <div class="item custom-item-fdi">
          <img class="scrollar-fd" data-scrollar-speed="0.6" src="./lib/img/sky-sphinx.jpg" />
        </div>
        <div class="item custom-item-fdac2">
          <div class="shape square scrollar-fd" data-scrollar-speed="0.2" style="transform:translateX(-20%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6"></div>
    </div>

    <div id="sidedeck" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm columnmb column2" style="z-index:5;">
        <div class="item custom-item-sdl">
          <div class="word">Passionate</div>
          <div class="word">Creative</div>
          <div class="word">Innovative</div>
        </div>
        <a href="./seasons.php" class="item custom-item-sdt">
          <div class="shape sliding scrollar-sd" data-scrollar-speed="0.9">
            <div class="shape-content">
              <div class="shape-icon"><img src="./lib/svg/calendar-date-2.svg" /></div>
              <div class="shape-name"><span>Seasons</span></div>
            </div>
          </div>
        </a>
      </div>
      <div class="column columnm column3"></div>
      <div class="column columnm columnmb columnmbl column4" style="z-index:5;">
        <div class="item custom-item-sdr">
          <div class="word">Skill</div>
          <div class="word">Experience</div>
        </div>
        <a href="./awards.php" class="item custom-item-sdb">
          <div class="shape sliding scrollar-sd" data-scrollar-speed="-0.9">
            <div class="shape-content">
              <div class="shape-icon"><img src="./lib/svg/winner.svg" /></div>
              <div class="shape-name"><span>Awards</span></div>
            </div>
          </div>
        </a>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6"></div>
    </div>

    <div id="sponsor" class="block">
      <div class="column columnf column1"></div>
      <div class="column columnm column2"></div>
      <div class="column columnm columnmb column3" style="z-index:5">
        <div class="item custom-item-spt">
          <div class="box-wrapper custom-box-spt scrollar-sponsor" data-scrollar-speed="0.6">
            <div class="box">
              <div class="box-up"><img src="./lib/svg/shaking-hands.svg" /></div>
              <div class="box-content">Join our journey</div>
              <div class="box-bottom">
                <div class="box-bottom-btn custom-box-spt-btn"><a href="./sponsor.php">sponsor us</a></div>
              </div>
            </div>
            <div class="shape sliding">
              <div class="shape-content">
                <div class="shape-icon"><img src="./lib/svg/astronaut.svg" /></div>
                <div class="shape-name"><span>Sponsor</span>Astronaut</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column columnm column4"></div>
      <div class="column columnm columnmb columnmbl column5" style="z-index:5">
        <div class="item custom-item-spb">
          <div class="box-wrapper custom-box-spb scrollar-sponsor" data-scrollar-speed="-0.6">
            <div class="shape sliding">
              <div class="shape-content">
                <div class="shape-icon"><img src="./lib/svg/planet.svg" /></div>
                <div class="shape-name"><span>Sponsor</span>Planet</div>
              </div>
            </div>
            <div class="box">
              <div class="box-up"><img src="./lib/svg/notification-70.svg" /></div>
              <div class="box-content">Let's talk :)</div>
              <div class="box-bottom">
                <div class="box-bottom-btn custom-box-spb-btn"><a href="mailto:ftc11779@allendalecolumbia.org">contact us</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column columnl column6"></div>
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
    <script type="text/javascript" src="./lib/vendor/scrollar-1.0.0/scrollar.js"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."home.js?v=".filemtime(CUSTOM_JS."home.js"); ?>"></script>
  </body>

</html>
