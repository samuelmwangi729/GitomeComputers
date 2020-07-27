@extends('layouts.home')
@section('content')
<section class="row">
    <div id="slider-animation" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <!-- The slideshow -->
      {{-- Start the Item --}}
            <div class="carousel-item active">
                <img src="{{ asset('images/services/laptop.jpg') }}" alt="Los Angeles">
                    <div class="text-box">
                                <div class="row align-items-center">     
                                        <div class="col-md-6">
                                        <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white !important">We Sell New &amp; Refubished Laptops</h6>
                                        <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4">We deal with wide varieties from different vendors Including but not limited to HP,Apple, Dell, Toshiba ...</p>
                                        </div>
                                </div>
                    </div>
            </div>     
        {{-- End the item --}} 
         {{-- Start the Item --}}
         <div class="carousel-item">
            <img src="{{ asset('images/services/networking.jpg') }}" alt="Los Angeles">
                <div class="text-box">
                            <div class="row align-items-center">     
                                    <div class="col-md-6">
                                    <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;font-weight:bold !important">Computer Networking</h6>
                                    <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                                        We Installl networks, Perform troubleshooting if in case the network is slow and also perform security assessments to ensure your network is safe from intrusion.
                                    </p>
                                    </div>
                            </div>
                </div>
        </div>     
    {{-- End the item --}} 
     {{-- Start the Item --}}
     <div class="carousel-item">
        <img src="{{ asset('images/services/bandwith.jpg') }}" alt="Los Angeles">
            <div class="text-box">
                        <div class="row align-items-center">     
                                <div class="col-md-6">
                                <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;background-color:black;opacity:.4;font-weight:bold !important">Networks Security</h6>
                                <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                                 We assess your computer networks  for any intrusion events. We keep You Safe
                                </p>
                                </div>
                        </div>
            </div>
    </div>     
{{-- End the item --}} 
  {{-- Start the Item --}}
  <div class="carousel-item">
    <img src="{{ asset('images/services/sw.jpg') }}" alt="Los Angeles">
        <div class="text-box">
                    <div class="row align-items-center">     
                            <div class="col-md-6">
                            <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;background-color:black;opacity:.4;font-weight:bold !important">Software Development</h6>
                            <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                             We create safe and highly secure software to help Manage any business infrastructure. 
                            </p>
                            </div>
                    </div>
        </div>
</div>     
{{-- End the item --}} 
{{-- Start the Item --}}
<div class="carousel-item">
    <img src="{{ asset('images/services/web.jpg') }}" alt="Los Angeles">
        <div class="text-box">
                    <div class="row align-items-center">     
                            <div class="col-md-6">
                            <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;background-color:black;opacity:.4;font-weight:bold !important">Web Design</h6>
                            <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                             Lets Take your business Online. We do web design at affordable rates
                            </p>
                            </div>
                    </div>
        </div>
</div>     
{{-- End the item --}} 
{{-- Start the Item --}}
<div class="carousel-item">
    <img src="{{ asset('images/services/motherboard.jpg') }}" alt="Los Angeles">
        <div class="text-box">
                    <div class="row align-items-center">     
                            <div class="col-md-6">
                            <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;background-color:black;opacity:.4;font-weight:bold !important">Computer Repair</h6>
                            <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                            We replace broken screens and also revive dead motherboards
                            </p>
                            </div>
                    </div>
        </div>
</div>     
{{-- End the item --}} 
{{-- Start the Item --}}
<div class="carousel-item">
    <img src="{{ asset('images/services/support.jpg') }}" alt="Los Angeles">
        <div class="text-box">
                    <div class="row align-items-center">     
                            <div class="col-md-6">
                            <h6 class="wow fadeInUp" data-wow-duration="4s" style="color:white;background-color:black;opacity:.4;font-weight:bold !important">Full Support</h6>
                            <p class="wow fadeInUp" data-wow-duration="2s" style="font-size:12px;background-color:black;opacity:.4;font-weight:bold">
                           We provide Tech Support to anyone with any difficulty in the sector
                            </p>
                            </div>
                    </div>
        </div>
</div>     
{{-- End the item --}} 
    </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slider-animation" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    
    
    </div>
    </section>
    
    
    
@stop