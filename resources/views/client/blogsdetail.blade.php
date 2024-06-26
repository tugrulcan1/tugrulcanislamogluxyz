<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from slimhamdi.net/tunis/demos/blog-post-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 07:30:47 GMT -->

<head>
  <meta charset="utf-8">
  <title>Tuğrul Can İslamoğlu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Template Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
  <!-- Template CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/component.css')}}" rel="stylesheet">
  <link href="{{asset('css/circle.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- CSS Skin File -->
  <link href="css/skins/yellow.css" rel="stylesheet">
  <!-- Live Style Switcher - demo only -->
  <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('css/skins/blue.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('css/skins/green.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('css/skins/yellow.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('css/skins/blueviolet.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('css/skins/goldenrod.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('css/skins/magenta.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('css/skins/orange.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('css/skins/purple.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('css/skins/red.css')}}">
  <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('css/skins/yellowgreen.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styleswitcher.css')}}">
</head>

<body class="blog-post">
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
      <div id="hideSwitcher">&times;</div>
    </div>
  </div>
  <div id="showSwitcher" class="styleSecondColor">
    <i class="fa fa-cog fa-spin"></i>
  </div>
  <!-- Live Style Switcher Ends - demo only -->
  <!-- Page Title Starts -->
  <div class="title-section text-left text-sm-center">
    <h2>my <span>blog</span>
    </h2>
    <span class="title-bg">posts</span>
  </div>
  <!-- Page Title Ends -->
  <!-- Main Content Starts -->
  <div class="main-content">
    <div class="container">
      <div class="row">
        <!-- Article Starts -->
        <article class="col-12">
          <!-- Meta Starts -->
          <div class="meta open-sans-font">
            <span>
              <i class="fa fa-user"></i> Tuğrul Can İslamoğlu </span>
            <span class="date">
              <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($blog['created_at'])->format('d M Y') }}
              </span>
            <span>
              <i class="fa fa-tags"></i> {!!$blog['short_content']!!} </span>
          </div>
          <!-- Meta Ends -->
          <!-- Article Content Starts -->
          <h1 class="text-uppercase text-capitalize">{{$blog['title']}}</h1>
          <img src="{{url('uploads/'.$blog['image'])}}" class="img-fluid" alt="Blog image" />
          <div class="blog-excerpt open-sans-font pb-5">
            <p>{!!$blog['content']!!}</p>
          </div>
          <!-- Article Content Ends -->
        </article>
        <!-- Article Ends -->
      </div>
    </div>
  </div>
  <!-- Template JS Files -->
  <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- Mirrored from slimhamdi.net/tunis/demos/blog-post-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 07:30:47 GMT -->

</html>