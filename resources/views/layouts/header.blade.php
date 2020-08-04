<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top" style="background-color:red !important">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="full">
              <div class="topbar-left">
                <ul class="list-inline">
                  @foreach (App\Contact::all() as $contact )
                      @if( $contact->Type=='Building')
                      <li> <span class="topbar-label"></span> <span class="topbar-hightlight"><i class="fa fa-map-marker"></i>{{ $contact->Address }}</span> </li>
                      @elseif( $contact->Type=='Mobile')
                      <li> <span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight"><a href="mailto:ggtomeh@gmail.com">{{ $contact->Address }}</a></span> </li>
                      @else
                      <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:ggtomeh@gmail.com">{{ $contact->Address }}</a></span> </li>
                      @endif
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-left">
              <div class="social_icon">
                <ul class="list-inline">
                  <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                  <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                  <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                  <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                  <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                  <li><a class="fa fa-whatsapp" style="color:greem" href="https://wa.me/0715366415" title="Instagram" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Make Appointment</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo" style="font-weight:bold;text-shadow:1px 1px  red;color:black"> 
              <img src="{{ asset('images/logos/logo.jpg') }}" alt="#" style="height:50px;width:50px;border-radius:50px !important" onclick="window.open('/','_parent')" />
              {{ config('app.name') }}
             </div>
            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">
                  <li> <a  href="/">Home</a>
                  </li>
                  <li><a href="{{ route('shop') }}">Shop</a></li>
                  <li><a href="it_about.html">About Us</a></li>
                  <li> <a href="{{ route('services') }}">Service</a>
                  </li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom end -->
  </header>
  <!-- end header -->