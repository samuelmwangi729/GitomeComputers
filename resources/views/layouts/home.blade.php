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
<link rel="icon" href="{{ asset('images/fevicon/fevicon.png') }}" type="image/gif" />
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
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        /* heading */
      </style>
</head>
<body id="default_theme">
<!-- loader -->
<div class="bg_load"> <img class="fa-spin" src="{{ asset('images/loaders/logo.jpg') }}" alt="#" style="height:100px" /> </div>
<!-- end loader -->
@include('layouts.header')
<div class="row-fluid">
  @yield('content')
</div>
<!-- section -->
<div class="section container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="{{ asset('images/logos/logo.jpg') }}" alt="#" width="70px" style="border-radius:50px" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="{{ route('contact') }}">Request Here</a> </div>
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
      <div class="col-sm-4 text-center">
        <div class="main-heading left_text">
          <h2>{{ config('app.name') }}</h2>
        </div>
        <p>
          Bring in your Devices  andWe  will diagnose what’s 
          wrong with the device  and offer the highest-quality, 
          quick and affordable repair work to get your device  up and running.
        </p>
      </div>
      <div class="col-sm-4 text-center">
        <div class="main-heading center_text">
          <h2>Services We Offer</h2>
        </div>
       <div class="row">
         <div class="col-sm-6">
          <ul class="footer-menu">
          @foreach( App\Service::all()->take(5) as $first)
          <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> {{ $first->Service }}</a></li>
          @endforeach
          </ul>
         </div>
         <div class="col-sm-6">
          <ul class="footer-menu">
            @foreach( App\Service::orderBy('id','desc')->get()->take(5) as $first)
          <li><a href="{{ route('services') }}"><i class="fa fa-angle-right"></i> {{ $first->Service }}</a></li>
          @endforeach
          </ul>
         </div>
       </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="main-heading left_text">
          <h2>Contact us</h2>
        </div>
        <ul class="list-inline">
          @foreach (App\Contact::all() as $contact )
              @if( $contact->Type=='Building')
              <li> <span class="topbar-label"></span> <span class="topbar-hightlight"><i class="fa fa-map-marker"></i>&nbsp;{{ $contact->Address }}</span> </li>
              @elseif( $contact->Type=='Mobile')
              <li> <span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight">&nbsp;{{ $contact->Address }}</span> </li>
              @else
              <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:{{ $contact->Address }}" style="text-decoration:none !important"> &nbsp;{{ $contact->Address }}</a></span> </li>
              @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <br><br>
  &HorizontalLine;
  <div class="text-center">
    @foreach ( App\Platform::all() as $platform)&VerticalLine;
            @if($platform->Platform=='Facebook')
            <a class="fa fa-facebook" href="{{ $platform->link }}" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp; &VerticalLine;
            @elseif($platform->Platform=='Whatsapp')
            <a class="fa fa-whatsapp"  href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @elseif($platform->Platform=='GooglePlus')
            <a class="fa fa-google-plus" href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @elseif($platform->Platform=='Instagram')
            <a class="fa fa-instagram" href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @elseif($platform->Platform=='Pinterest')
            <a class="fa fa-pinterest" href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @elseif($platform->Platform=='Linkedin')
            <a class="fa fa-linkedin" href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @else
            <a class="fa fa-twitter" href="{{ $platform->link }}/" title="{{ $platform->Platform }}" target="_blank" style="color:white !important"></a>&nbsp;&nbsp;&VerticalLine;
            @endif
      @endforeach
  </div>
  <div class="container text-center text-white">
   <p>
     &copy; <?php echo date('Y');?> &VerticalLine;{{ config('app.name') }} | All Rights Reserved
   </p>
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
<script src="{{ asset('js/custom.js') }}"></script>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('error'))
      toastr.error("{{ Session::get('error') }}");
  @endif
  @if(Session::has('info'))
      toastr.info("{{ Session::get('info') }}");
  @endif
</script>
<script>
  $('#summernote').summernote(
    {
      height:250
    }
  )
  </script>
</body>
</html>
