<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>{{config('app.name') }} Is a computer garage located in Nyandarua county Ol kalou town. Get your Electronics fixed at an affordable price</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="Samuel Mwangi ">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ asset('css/colors1.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
@include('layouts.header')
@yield('content')
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <h4 class="text-center">Experts in Repairing :-</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="{{ asset('images/services/hp.png') }}" style="width:40px"></li>
            <li><img src="{{ asset('images/services/dell.svg') }}" style="width:40px"></li>
            <li><img src="{{ asset('images/services/ibm.png') }}" style="width:100px"></li>
            <li><img src="{{ asset('images/services/toshiba.png') }}" style="width:170px"></li>
            <li><i class="fa fa-apple" style="font-size:40px"></i></li>
          </ul>
        </div>
      </div>
    </div>
    <h4 class="text-center">And  Many More Computing Devices. Why Not Give Us A Visit?</h4>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="main-heading left_text">
          <h2>{{ config('app.name') }}</h2>
        </div>
        <p>
          Bring in your Devices  andWe  will diagnose what’s 
          wrong with the device  and offer the highest-quality, 
          quick and affordable repair work to get your device  up and running.
        </p>
        <ul class="social_icons">
          <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <div class="main-heading center_text">
          <h2>Services We Offer</h2>
        </div>
       <div class="row">
         <div class="col-sm-6">
          <ul class="footer-menu">
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Data recovery</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Computer repair</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Mobile service</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Network solutions</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Technical support</a></li>
          </ul>
         </div>
         <div class="col-sm-6">
          <ul class="footer-menu">
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i>OS Installation</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Password Reset</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Software Development</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> Web design</a></li>
            <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i>Onsite Services</a></li>
          </ul>
         </div>
       </div>
      </div>
      <div class="col-sm-4">
        <div class="main-heading left_text">
          <h2>Contact us</h2>
        </div>
        <p><i class="fa fa-map-marker"></i>&nbsp;Goshen HSE, 1<sup>st</sup> Floor Rm 2,<br>
          Ol Kalou Nyandarua County<br>
          <span style="font-size:18px;"><i class="fa fa-phone"></i>&nbsp;<a href="tel:+9876543210">+987 654 3210</a></span></p>
        <div class="footer_mail-section">
          <form>
            <fieldset>
            <div class="field">
              <input placeholder="Email" type="text">
              <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
            </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="cprt">
      <p>{{ config('app.name') }} © Copyrights <?php echo date('Y');?> Design by <a href="mailto:samuelmwangi729@gmail.com" style="color:white;text-style:none !mportant">Samuel Mwangi</a></p>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('js/wow.js') }}"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>
</html>
