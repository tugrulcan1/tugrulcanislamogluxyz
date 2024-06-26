<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from slimhamdi.net/tunis/demos/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 07:30:32 GMT -->
<head>
    <meta charset="utf-8">
    <title>Tunis - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <!-- Template CSS Files -->
    <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/css/component.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/css/circle.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/css/style.css" rel="stylesheet">
    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">
    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ URL::to('/') }}/css/skins/blue.css">
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ URL::to('/') }}/css/skins/green.css">
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ URL::to('/') }}/css/skins/yellow.css">
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{ URL::to('/') }}/css/skins/blueviolet.css">
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{ URL::to('/') }}/css/skins/goldenrod.css">
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{ URL::to('/') }}/css/skins/magenta.css">
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ URL::to('/') }}/css/skins/orange.css">
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ URL::to('/') }}/css/skins/purple.css">
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ URL::to('/') }}/css/skins/red.css">
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{ URL::to('/') }}/css/skins/yellowgreen.css">
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css">
    <!-- Modernizr JS File -->
    <script src="{{ URL::to('/') }}/js/modernizr.min.js"></script>
  </head>
  <body class="dark home-page">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
      <div class="content-switcher">
        <h4>COLOR SWITCHER</h4>
        <ul>
          <li>
            <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color">
              <img src="img/styleswitcher/purple.png" alt="purple">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color">
              <img src="img/styleswitcher/red.png" alt="red">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color">
              <img src="img/styleswitcher/blueviolet.png" alt="blueviolet">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color">
              <img src="img/styleswitcher/blue.png" alt="blue">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color">
              <img src="img/styleswitcher/goldenrod.png" alt="goldenrod">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color">
              <img src="img/styleswitcher/magenta.png" alt="magenta">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color">
              <img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color">
              <img src="img/styleswitcher/orange.png" alt="orange">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color">
              <img src="img/styleswitcher/green.png" alt="green">
            </a>
          </li>
          <li>
            <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color">
              <img src="img/styleswitcher/yellow.png" alt="yellow">
            </a>
          </li>
        </ul>
        <h4>TRANSITION DIRECTION</h4>
        <div class="flex justify-between transition-direction">
          <div id="cornertopleft">
            <div class="arrow cornertopleft"></div>
          </div>
          <div class="active" id="top">
            <div class="arrow top"></div>
          </div>
          <div id="cornertopright">
            <div class="arrow cornertopright"></div>
          </div>
        </div>
        <div class="flex justify-between transition-direction">
          <div id="left">
            <div class="arrow left"></div>
          </div>
          <div id="right">
            <div class="arrow right"></div>
          </div>
        </div>
        <div class="flex justify-between transition-direction">
          <div id="cornerbottomleft">
            <div class="arrow cornerbottomleft"></div>
          </div>
          <div id="bottom">
            <div class="arrow bottom"></div>
          </div>
          <div id="cornerbottomright">
            <div class="arrow cornerbottomright"></div>
          </div>
        </div>
        <span>Navigate between sections to see the effect.</span>
        <div id="hideSwitcher">&times;</div>
      </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor">
      <i class="fa fa-cog fa-spin"></i>
    </div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- PRELOADER STARTS -->
    <div id="preloader">
      <div class="line"></div>
    </div>
    <!-- PRELOADER ENDS -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
      <!-- Fixed Navigation Starts -->
      <ul id="desktop-nav" class="icon-menu d-none d-lg-block">
        <li class="icon-box desktop-nav-element active">
          <i class="fa fa-home"></i>
          <div>
            <h2>Home</h2>
          </div>
        </li>
        <li class="icon-box desktop-nav-element">
          <i class="fa fa-user"></i>
          <div>
            <h2>About</h2>
          </div>
        </li>
        <li class="icon-box desktop-nav-element">
          <i class="fa fa-briefcase"></i>
          <div>
            <h2>Portfolio</h2>
          </div>
        </li>
        <li class="icon-box desktop-nav-element">
          <i class="fa fa-envelope-open"></i>
          <div>
            <h2>Contact</h2>
          </div>
        </li>
        <li class="icon-box desktop-nav-element">
          <i class="fa fa-comments"></i>
          <div>
            <h2>Blog</h2>
          </div>
        </li>
      </ul>
      <!-- Fixed Navigation Ends -->
      <!-- Mobile Menu Starts -->
      <nav class="d-block d-lg-none">
        <div class="inputmobile" id="inputmobile">
          <div id="trigger-mobile" class="trigger-mobile">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <ul class="list-unstyled" id="mobile-nav">
            <li class="mobile-nav-element home-link active">
              <div>
                <i class="fa fa-home"></i>
                <span>Home</span>
              </div>
            </li>
            <li class="mobile-nav-element">
              <div>
                <i class="fa fa-user"></i>
                <span>About</span>
              </div>
            </li>
            <li class="mobile-nav-element">
              <div>
                <i class="fa fa-folder-open"></i>
                <span>Portfolio</span>
              </div>
            </li>
            <li class="mobile-nav-element">
              <div>
                <i class="fa fa-envelope-open"></i>
                <span>Contact</span>
              </div>
            </li>
            <li class="mobile-nav-element">
              <div>
                <i class="fa fa-comments"></i>
                <span>Blog</span>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Mobile Menu Ends -->
    </header>