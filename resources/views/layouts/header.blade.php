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
                      <li> <span class="topbar-label"></span> <span class="topbar-hightlight" style="color:black;font-weight:bold"><i class="fa fa-map-marker"></i>{{ $contact->Address }}</span> </li>
                      @elseif( $contact->Type=='Mobile')
                      <li> <span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight" style="color:black;font-weight:bold">{{ $contact->Address }}</span> </li>
                      @else
                      <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:{{ $contact->Address }}" style="color:black;font-weight:bold">{{ $contact->Address }}</a></span> </li>
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
              @foreach ( App\Platform::all() as $platform)
                    @if($platform->Platform=='Facebook')
                    <li><a class="fa fa-facebook" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @elseif($platform->Platform=='Whatsapp')
                    <li><a class="fa fa-whatsapp"  href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @elseif($platform->Platform=='GooglePlus')
                    <li><a class="fa fa-google-plus" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @elseif($platform->Platform=='Instagram')
                    <li><a class="fa fa-instagram" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @elseif($platform->Platform=='Pinterest')
                    <li><a class="fa fa-pinterest" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @elseif($platform->Platform=='Linkedin')
                    <li><a class="fa fa-linkedin" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @else
                    <li><a class="fa fa-twitter" href="{{ $platform->Link }}" title="{{ $platform->Platform }}" target="_blank"></a></li>
                    @endif
              @endforeach
                </ul>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo"> <a class="btn white_btn" href="{{ route('appointments.index') }}" style="font-size:11px;font-weight:bold">Appointments</a> </div>
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
            <div class="logo" style="font-weight:bold;font-size:12px;text-shadow:1px 1px  red;color:black"> 
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
                  <li> <a href="{{ route('services') }}">Service</a>
                  </li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('cart.index') }}">Cart<sup><div class="badge badge-danger">{{ count(App\Cart::where([
                    ['clientId','=',Session::get('GuestId')],
                    ['Status','=',0]
                  ])->get()) }}</div></sup></a></li>
                  <li><a href="{{ route('track') }}">Tracker</a></li>
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