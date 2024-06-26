<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from slimhamdi.net/tunis/demos/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 07:30:32 GMT -->
<head>
    <meta charset="utf-8">
    <title>Tuğrul Can İslamoğlu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">
    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css">
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css">
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css">
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css">
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css">
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css">
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css">
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css">
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css">
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css">
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css">
    <!-- Modernizr JS File -->
    <script src="js/modernizr.min.js"></script>
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
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <div class="pages">
      <!-- Home Starts -->
      <div class="page page--current" id="home">
        <div class="home">
          <div class="container-fluid main-container container-home p-0">
            <div class="color-block d-none d-lg-block"></div>
            <div class="row home-details-container align-items-center">
			  <img class="col-lg-4 position-fixed d-none d-lg-block" src="img/dark.jpg" alt="">
              <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                  <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture">
                  <h1 class="text-uppercase poppins-font">tuğrul can İslamoğlu <span></span>
                  </h1>
                  <p class="open-sans-font">{{$settings['hakkimda']}}</p>
                  <a id="link-about" class="button">
                    <span class="button-text">daha fazla bİlgİ</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Home Ends -->
      <!-- About Starts -->
      <div class="page" id="about">
        <!-- Main Content Starts -->
        <!-- Section Title Starts -->
        <div class="title-section text-left text-sm-center">
          <h2>ABOUT <span>ME</span>
          </h2>
          <span class="title-bg">Hakkımda</span>
        </div>
        <!-- Section Title Ends -->
        <div class="about">
          <div class="main-content">
            <div class="container">
              <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                  <div class="row">
                    <div class="col-12">
                      <h3 class="text-uppercase custom-title mb-0 ft-wt-600">Kişisel Bilgiler</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                      <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture">
                    </div>
                    <div class="col-6">
                      <ul class="about-list list-unstyled open-sans-font">
                        <li>
                          <span class="title">first name :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['name']}}</span>
                        </li>
                        <li>
                          <span class="title">last name :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['surname']}}</span>
                        </li>
                        <li>
                          <span class="title">Age :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['age']}}</span>
                        </li>
                        <li>
                          <span class="title">Nationality :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['nationality']}}</span>
                        </li>
                        
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="about-list list-unstyled open-sans-font">
                        <li>
                          <span class="title">Address :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['adress']}}</span>
                        </li>
                        <li>
                          <span class="title">phone :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['phone']}}</span>
                        </li>
                        <li>
                          <span class="title">Email :</span>
                          <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$settings['e-mail']}}</span>
                        </li>
                        
                        
                      </ul>
                    </div>
                   
                  </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="box-stats with-margin">
                        <h3 class="poppins-font position-relative">12</h3>
                        <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span>
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="box-stats with-margin">
                        <h3 class="poppins-font position-relative">97</h3>
                        <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span>
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="box-stats">
                        <h3 class="poppins-font position-relative">81</h3>
                        <p class="open-sans-font m-0 position-relative text-uppercase">Happy <span class="d-block">customers</span>
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="box-stats">
                        <h3 class="poppins-font position-relative">53</h3>
                        <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Boxes Ends -->
              </div>
              <hr class="separator">
              <!-- Skills Starts -->
              <div class="row">
                <div class="col-12">
                  <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p100">
                    <span>100%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p40">
                    <span>40%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p100">
                    <span>100%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p75">
                    <span>75%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">laravel</h6>
                </div>
                
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p50">
                    <span>50%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                </div>
                
               
              </div>
              <!-- Skills Ends -->
              <hr class="separator mt-1">
            </div>
          </div>
        </div>
        <!-- Main Content Ends -->
      </div>
      <!-- About Ends -->
      <!-- Portfolio Starts -->
     
      <!-- Portfolio Ends -->
      <!-- Contact Starts -->
      <div class="page" id="contact">
        <div class="contact">
          <div class="title-section text-left text-sm-center">
            <h2>contact<span></span>
            </h2>
            <span class="title-bg">İletİşİm</span>
          </div>
          <div class="main-content">
            <div class="container">
              <div class="row">
                <!-- Left Side Starts -->
                <div class="col-12 col-lg-4">
                  <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">İletİşİme geç</h3>
                  <p class="open-sans-font mb-3">Formu Doldurarak bana ulaşabilirsiniz</p>
                  <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>{{$settings['e-mail']}}
                  </p>
                  <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span>{{$settings['phone']}}
                  </p>
                  <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook">
                      <a title="Facebook" href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="twitter">
                      <a title="Twitter" href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="youtube">
                      <a title="Youtube" href="#">
                        <i class="fa fa-youtube"></i>
                      </a>
                    </li>
                   
                  </ul>
                </div>
                <!-- Left Side Ends -->
                <!-- Contact Form Starts -->
                <div class="col-12 col-lg-8">
                  <form class="contactform" method="post" action="https://slimhamdi.net/tunis/demos/php/process-form.php">
                    <div class="contactform">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <input autocomplete="off" type="text" name="name" placeholder="YOUR NAME">
                        </div>
                        <div class="col-12 col-md-4">
                          <input autocomplete="off" type="email" name="email" placeholder="YOUR EMAIL">
                        </div>
                        <div class="col-12 col-md-4">
                          <input autocomplete="off" type="text" name="subject" placeholder="YOUR SUBJECT">
                        </div>
                        <div class="col-12">
                          <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                          <button type="submit" class="button">
                            <span class="button-text">Send Message</span>
                            <span class="button-icon fa fa-send"></span>
                          </button>
                        </div>
                        <div class="col-12 form-message">
                          <span class="output_message text-center font-weight-600 text-uppercase"></span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact Form Ends -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact Ends -->
      <!-- Blog Starts -->
      <div class="page" id="blog">
        <div class="blog">
          <!-- Page Title Starts -->
          <div class="title-section text-left text-sm-center">
            <h2>my <span>blogs</span>
            </h2>
            <span class="title-bg">bloglarim</span>
          </div>
          <!-- Page Title Ends -->
          <!-- Main Content Starts -->
          <div class="main-content">
            <div class="container">
              <!-- Articles Starts -->
              <div class="row">
                <!-- Article Starts -->
                 @foreach ($blogs as $blog) 
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                    <div class="post-thumb">
                      <a href="{{route('blogs.detail',$blog->id)}}" class="d-block position-relative overflow-hidden">
                        <img src="img/blog/dijital-donusum.jpg" class="img-fluid" alt="Blog Post">
                      </a>
                    </div>
                    <div class="post-content">
                      <div class="entry-header">
                        <h3>
                          <a href="blog-post-dark.html">{{$blog->title}}</a>
                        </h3>
                      </div>
                      <div class="entry-content open-sans-font">
                        <p>{{$blog->short_content}} </p>
                      </div>
                    </div>
                  </article>
                </div>
                @endforeach
        
                <!-- Pagination Ends -->
              </div>
              <!-- Articles Ends -->
            </div>
          </div>
        </div>
      </div>
      <!-- Blog Ends -->
    </div>
    <!-- Main Content Ends -->
    <!-- Template JS Files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from slimhamdi.net/tunis/demos/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 07:30:45 GMT -->
</html>