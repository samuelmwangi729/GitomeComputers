@extends('layouts.home')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
  <ol class="carousel-indicators">
    @for($i=0;$i<count($services);$i++)
    <li data-target="#myCarousel" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif></li>
    @endfor
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset($min->ServiceImage) }}" alt="{{ $min->Service }}">
      <div class="row">
        <div class="col-sm-6">
          <div class="carousel-caption">
            <h1 style="font-size:40px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">{{ $min->Service }}</h1>
          </div>
        </div>
      </div>
    </div>
    @foreach ($services as $service)
    <div class="carousel-item">
      <img src="{{ asset($service->ServiceImage) }}" alt="{{ $service->Service }}">
       <div class="row">
         <div class="col-sm-6">
          <div class="carousel-caption">
            <h1 style="font-size:40px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">{{ $service->Service }}</h1>
           </div>
         </div>
       </div>
     </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="row-fluid" style="margin-bottom:100px">
  
</div>
  {{-- End Carousel --}}
  <!--start services-->
<div class="container" style="margin-bottom:50px">	
  <div class="row mbr-justify-content-center">
        {{-- Start Col --}}
          <div class="col-lg-6 mbr-col-md-10">
              <div class="wrap">
                  <div class="ico-wrap">
                      <span class="mbr-iconfont fa fa-clock-o"></span>
                  </div>
                  <div class="text-wrap vcenter">
                      <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color:black">Fast  <span>Services</span></h2>
                      <p class="mbr-fonts-style text1 mbr-text display-6" style="color:purple">
                        We will get your device up and running within 24 hrs
                      </p>
                  </div>
              </div>
          </div>      
        {{-- End Col --}}   
         {{-- Start Col --}}
         <div class="col-lg-6 mbr-col-md-10">
          <div class="wrap">
              <div class="ico-wrap">
                  <span class="mbr-iconfont fa fa-lock"></span>
              </div>
              <div class="text-wrap vcenter">
                  <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color:black">Secure  <span>Payments</span></h2>
                  <p class="mbr-fonts-style text1 mbr-text display-6" style="color:purple">
                   We let you Pay for What you See. Pay on delivery and Confirm the Quality of the goods
                  </p>
              </div>
          </div>
      </div>      
    {{-- End Col --}}    
             {{-- Start Col --}}
             <div class="col-lg-6 mbr-col-md-10">
              <div class="wrap">
                  <div class="ico-wrap">
                      <span class="mbr-iconfont fa fa-sitemap"></span>
                  </div>
                  <div class="text-wrap vcenter">
                      <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color:black">Expert  <span>Team</span></h2>
                      <p class="mbr-fonts-style text1 mbr-text display-6" style="color:purple">
                        This makes our clients sure
                        that we can fix your failed device
                      </p>
                  </div>
              </div>
          </div>      
        {{-- End Col --}}    
        {{-- Start Col --}}
        <div class="col-lg-6 mbr-col-md-10">
          <div class="wrap">
              <div class="ico-wrap">
                  <span class="mbr-iconfont fa fa-wllet"></span>
              </div>
              <div class="text-wrap vcenter">
                  <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color:black">Affordable  <span>Services</span></h2>
                  <p class="mbr-fonts-style text1 mbr-text display-6" style="color:purple">
                    Our Services are pocket friendly to each and everyone desiring to let us work and serve them.
                  </p>
              </div>
          </div>
      </div>      
    {{-- End Col --}}    
  </div>
</div>
</section>
    
    
    
@stop