@extends('layouts.home')
@section('content')
<div class="ROW">
<div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:10px">
    <ol class="carousel-indicators">
      @for($i=0;$i<count($sliders);$i++)
      <li data-target="#myCarousel" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif></li>
      @endfor
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="{{ asset($active->Image) }}">
        <div class="row">
          <div class="col-sm-6">
            <div class="carousel-caption">
              <h1 style="font-size:20px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">{{ $active->Headline }}</h1>
              <p style="font-size:15px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">
                {{ $active->Text }}
              </p>
              <p><a class="btn btn-lg" href="{{ url($active->Link) }}" role="button" style="background-color:gold;color:purple">{{ $active->LinkText }}</a></p>
            </div>
          </div>
        </div>
      </div>
      @foreach ($sliders as $slider)
      <div class="carousel-item">
        <img src="{{ asset($slider->Image) }}">
         <div class="row">
           <div class="col-sm-6">
            <div class="carousel-caption">
              <h1 style="font-size:20px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">{{ $slider->Headline }}</h1>
               <p style="font-size:15px;color:white;text-shadow:2px 2px black;font-weight:bold;background-color:black;opacity:.5">
                 {{ $active->Text }}
               </p>
               <p><a class="btn btn-lg" href="{{ url($slider->Link) }}" role="button" style="background-color:gold;color:purple">{{ $slider->LinkText }}</a></p>
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
</div>
  {{-- End Carousel --}}
  {{-- start Products Brands --}}
  <div class="container">
    <h4 class="text-center" style="color:black;font-size:30px">Available Brands</h4>
  </div>
  <div class="row" style="padding-bottom:50px">
   @foreach ($brands as $brand)
   <div class="col-sm-3" style="padding-right:20px">
   <div class="card" style="border:none !important">
     <div class="card-title text-center">
       <a href="#">
        <img src="{{ asset($brand->BrandImage) }}" height="170px">
       </a>
     </div>
   </div>
  </div>
   @endforeach
  </div>
  {{-- Start Products --}}
  <div class="container">
    <h4 class="text-center" style="color:black;font-size:30px">Products</h4>
  </div>
  <div class="row bg-light" style="margin-bottom:50px">
    @foreach ($products as $product)
    <div class="col-sm-3">
      <div class="card" style="border:none !important">
        <div class="card-title text-center">
          <a href="#">
           <img src="{{ asset($product->ProductImage) }}" height="170px">
          </a><br>
          {{ $product->ProductName }}<br> Brand: {{ $product->ProductBrand }}<br>
        At Ksh :   {{ $product->SellingPrice }}<br>
        {{ $product->ProductText }}
        <br>
        </div>
       <div class="row" style="color:purple">
         <div class="col-sm-4 text-center">
         <a href="{{ route('product.single',[$product->ProductSlug]) }}" style="color:purple">
          <i class="fa fa-eye"></i>
         </a>
         </div>        
         {{-- End View Product --}}
         <div class="col-sm-4 text-center">
          <i class="fa fa-cart-plus" onclick="document.getElementById('addCart').submit()"></i>
         </div>
         <form class="form" method="post" action="{{ route('cart.store') }}" id="addCart">
          @csrf
          <div class="quantity">
            <input class="form-control"  type="hidden" name="ProductId" style="border-radius:30px;width:40%" value="{{ $product->ProductId }}">
            <input step="1" min="1"  name="Quantity" value="1" title="Qty" class="form-control" size="4" type="hidden" style="border-radius:30px;width:40%">
          </div>
        </form>
         {{-- End Add Cart --}}
       </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<br><br>
@endsection