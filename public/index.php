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

    <!-- <div style="position:relative;height:100vh;">
      <div class="rellax-wrapper" style="position:absolute;top:300px;left:50%;transform:translateX(-50%);">
        <div class="rellax-col">
          <div class="rellax">
            I’m that default chill speed of "-2"
          </div>
        </div>

        <div class="rellax-col">
          <div class="rellax" data-rellax-speed="7">
            I’m super fast!!
          </div>
        </div>

        <div class="rellax-col">
          <div class="rellax" data-rellax-speed="-4">
            I’m extra slow and smooth
          </div>
        </div>
      </div>
    </div> -->
    <!--

    loading screen with rocket launching

    -->

    <div id="nav-trigger-wrapper" class="nav-trigger-wrapper nav-trig-sensitive">
      <div class="nav-trigger">
        <img class="nav-trigger-icon" src="./lib/svg/spaceship_color.svg" alt="MENU"></img>
      </div>
      <div class="nav-extra-wrapper">
        <div class="nav-extra-btn nav-extra-btn-sponsor"><a href="">Sponsor</a></div>
        <div class="nav-extra-btn nav-extra-btn-contact"><a href="">Contact</a></div>
      </div>
    </div>

    <!-- <div id="nav" class="nav">
      <div class="nav-overlay"></div>
      <div class="nav-content">
        <ul class="nav-navbar">
          <li>Home</li>
          <li>About</li>
          <li>Home</li>
        </ul>
      </div>
    </div> -->

    <div id="masthead" class="block">
      <div class="column columnf column1">

      </div>
      <div class="column columnm columnmb column2" style="z-index:5;">
        <div class="item custom-item-mhl">
          <div class="box-wrapper box-type-masthead custom-box-mhl">
            <div class="box-up"><span>F</span>IRST <span>T</span>ech <span>C</span>hallenge</div>
            <div class="box">
              <div class="box-content text-uppercase">Team 11779</div>
            </div>
          </div>
        </div>
        <div class="item custom-item-mhac2">
          <div class="shape square rellax" data-rellax-speed="-2" style="transform:translate3d(0px, 0px, 0px) translateX(20%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column3">
        <div class="item custom-item-mhac1">
          <div class="shape square rellax" data-rellax-speed="-4" style="transform:translate3d(0px, 0px, 0px) translateX(50%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm columnmb column4" style="z-index:4;">
        <div class="item item-center-vert custom-item-mhv">
          <video class="rellax" data-rellax-speed="2" width="100%" height="auto" autoplay loop muted src="./lib/vid/masthead.mp4">Your browser does not support the video tag.</video>
        </div>
        <div class="item custom-item-mhac3">
          <div class="shape square rellax" data-rellax-speed="-3" style="transform:translate3d(0px, 0px, 0px) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column5"></div>
      <div class="column columnl column6"></div>
    </div>

    <div id="bow" class="block">
      <div class="column columnf column1">

      </div>
      <div class="column columnm column2">
        <div class="item custom-item-bww">
          <div class="rellax" data-rellax-speed="2">
            <div class="word">we</div>
            <div class="word">are</div>
            <div class="word">the</div>
            <div class="word">aces</div>
          </div>
        </div>
      </div>
      <div class="column columnm columnmb column3">
        <div class="item custom-item-bwi">
          <img class="rellax" data-rellax-speed="-7" src="./lib/img/sky-jar.jpg" />
        </div>
        <div class="item custom-item-bwac2">
          <div class="shape square rellax" data-rellax-speed="3" style="transform:translate3d(0px, 0px, 0px) translateX(-50%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm columnmb column4">
        <div class="item custom-item-bwc">
          <div class="box-wrapper box-type-masthead custom-box-bwc rellax" data-rellax-speed="2">
            <div class="box">
              <div class="box-up"><img src="./lib/svg/multiple-19.svg" /></div>
              <div class="box-content">
                <div class="word"><a href="https://www.firstinspires.org/robotics/ftc" target="_blank" rel="noopener"><span>FTC</span></a> TEAM of</div>
                <div class="word"><a href="https://allendalecolumbia.org" target="_blank" rel="noopener"><span>Allendale Columbia</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column columnm column5">
        <div class="item custom-item-bwac1">
          <div class="shape square rellax" data-rellax-speed="-3" style="transform:translate3d(0px, 0px, 0px) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnl column6">

      </div>
    </div>

    <div id="flightdeck" class="block">
      <div class="column columnf column1">

      </div>
      <div class="column columnm column2">

      </div>
      <div class="column columnm columnmb column3" style="z-index:5;">
        <div class="item custom-item-fdt">
          <div class="box-wrapper custom-box-fdt rellax" data-rellax-speed="2">
            <div class="box">
              <div class="box-up"><img src="./lib/svg/robot.svg" /></div>
              <div class="box-content">
                We build robots with <span>innovation</span> and <span>dedication</span>
              </div>
              <div class="box-bottom">
                <div class="custom-box-fdt-btn"><a href="about.php">about us</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="itetm custom-item-fdac1">
          <div class="shape square rellax" data-rellax-speed="-2" style="transform:translate3d(0px, 0px, 0px) translateX(-20%) rotate(45deg);"></div>
        </div>
        <div class="itetm custom-item-fdac3">
          <div class="shape square rellax" data-rellax-speed="-3" style="transform:translate3d(0px, 0px, 0px) translateX(-50%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm columnmb column4">
        <div class="item custom-item-fdi">
          <img class="rellax" data-rellax-speed="-7" src="./lib/img/sky-sphinx.jpg" />
        </div>
        <div class="item custom-item-fdac2">
          <div class="shape square rellax" data-rellax-speed="-4" style="transform:translate3d(0px, 0px, 0px) translateX(-20%) rotate(45deg);"></div>
        </div>
      </div>
      <div class="column columnm column5">

      </div>
      <div class="column columnl column6">

      </div>
    </div>

    <div id="sidedeck" class="block">
      <div class="column columnf column1">

      </div>
      <div class="column columnm columnmb column2" style="z-index:5;">
        <div class="item custom-item-sdl">
          <div class="word">Passionate</div>
          <div class="word">Creative</div>
          <div class="word">Innovative</div>
        </div>
        <a href="./seasons.php" class="item custom-item-sdt">
          <div class="shape rellax sliding" data-rellax-speed="-1">
            <div class="shape-content">
              <div class="shape-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g class="nc-icon-wrapper"><path fill="#E6E6E6" d="M1,45c0,1.10455,0.89545,2,2,2h42c1.10455,0,2-0.89545,2-2V15H1V45z"/> <path fill="#E86C60" d="M45,5H3C1.89545,5,1,5.89539,1,7v8h46V7C47,5.89539,46.10455,5,45,5z"/> <path fill="#444444" d="M10,10V2c0-0.55228,0.44771-1,1-1h2c0.55229,0,1,0.44772,1,1v8c0,0.55229-0.44771,1-1,1h-2 C10.44771,11,10,10.55229,10,10z"/> <path fill="#444444" d="M34,10V2c0-0.55228,0.44772-1,1-1h2c0.55228,0,1,0.44772,1,1v8c0,0.55229-0.44772,1-1,1h-2 C34.44772,11,34,10.55229,34,10z"/> <path fill="#B3B3B3" d="M40,34h-3v-6h3c0.55273,0,1-0.44727,1-1s-0.44727-1-1-1h-3v-5c0-0.55273-0.44727-1-1-1s-1,0.44727-1,1v5h-6 v-5c0-0.55273-0.44727-1-1-1s-1,0.44727-1,1v5h-6v-5c0-0.55273-0.44727-1-1-1s-1,0.44727-1,1v5h-6v-5c0-0.55273-0.44727-1-1-1 s-1,0.44727-1,1v5H8c-0.55273,0-1,0.44727-1,1s0.44727,1,1,1h3v6H8c-0.55273,0-1,0.44727-1,1s0.44727,1,1,1h3v5 c0,0.55273,0.44727,1,1,1s1-0.44727,1-1v-5h6v5c0,0.55273,0.44727,1,1,1s1-0.44727,1-1v-5h6v5c0,0.55273,0.44727,1,1,1 s1-0.44727,1-1v-5h6v5c0,0.55273,0.44727,1,1,1s1-0.44727,1-1v-5h3c0.55273,0,1-0.44727,1-1S40.55273,34,40,34z M13,34v-6h6v6H13z M21,34v-6h6v6H21z M29,34v-6h6v6H29z"/></g></svg>
              </div>
              <div class="shape-name"><span>Seasons</span></div>
            </div>
          </div>
        </a>
      </div>
      <div class="column columnm column3">

      </div>
      <div class="column columnm columnmb column4" style="z-index:5;">
        <div class="item custom-item-sdr">
          <div class="word">Skill</div>
          <div class="word">Experience</div>
        </div>
        <a href="./awards.php" class="item custom-item-sdb">
          <div class="shape rellax sliding">
            <div class="shape-content">
              <div class="shape-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g class="nc-icon-wrapper"><path d="M18.828,32.828l-6.47-6.47a3.474,3.474,0,0,0-3.027-1,2.276,2.276,0,0,0-1.429.763A2.937,2.937,0,0,0,7.173,28,2.809,2.809,0,0,0,8,30l5,5a1,1,0,1,1-1.414,1.414l-5-5A4.794,4.794,0,0,1,5.173,28,4.7,4.7,0,0,1,7,24.248V17.17A3.114,3.114,0,0,0,4.161,14,3,3,0,0,0,1,17V30.6a4,4,0,0,0,.877,2.5L9,42v4a1,1,0,0,0,1,1h9a1,1,0,0,0,1-1V35.657A4,4,0,0,0,18.828,32.828Z" fill="#eebc99"/> <path d="M29.172,32.828l6.47-6.47a3.474,3.474,0,0,1,3.027-1,2.276,2.276,0,0,1,1.429.763A2.937,2.937,0,0,1,40.827,28,2.809,2.809,0,0,1,40,30l-5,5a1,1,0,1,0,1.414,1.414l5-5A4.794,4.794,0,0,0,42.827,28,4.7,4.7,0,0,0,41,24.248V17.17A3.114,3.114,0,0,1,43.839,14,3,3,0,0,1,47,17V30.6a4,4,0,0,1-.877,2.5L39,42v4a1,1,0,0,1-1,1H29a1,1,0,0,1-1-1V35.657A4,4,0,0,1,29.172,32.828Z" fill="#eebc99"/> <path d="M29.957,23A5,5,0,0,1,25,18V16H23v2a5,5,0,0,1-4.957,5A1.018,1.018,0,0,0,17,24v1a1,1,0,0,0,1,1H30a1,1,0,0,0,1-1V24A1.018,1.018,0,0,0,29.957,23Z" fill="#e2ac4b"/> <path d="M36,1H12a1,1,0,0,0-1,1V5c0,4.006,2.03,7.018,5.225,7.854a7.991,7.991,0,0,0,15.55,0C34.97,12.018,37,9.006,37,5V2A1,1,0,0,0,36,1ZM13,5V3h3v7.64C14.129,9.788,13,7.744,13,5ZM35,5c0,2.744-1.129,4.788-3,5.64V3h3Z" fill="#ffd764"/></g></svg>
              </div>
              <div class="shape-name"><span>Awards</span></div>
            </div>
          </div>
        </a>
      </div>
      <div class="column columnm column5">

      </div>
      <div class="column columnl column6">

      </div>
    </div>

    <div id="sponsor" class="block">
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
    </div>

    <div id="contact" class="block">
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
    <!-- <script type="text/javascript" src="./lib/vendor/parallax.js-1.5.0/parallax.min.js"></script> -->
    <script type="text/javascript" src="./lib/vendor/rellax-1.7.1/rellax.min.js"></script>
    <script type="text/javascript" src="<?php echo BOOTSTRAP."js/bootstrap.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo CUSTOM_JS."home.js?v=".filemtime(CUSTOM_JS."home.js"); ?>"></script>
  </body>

</html>
