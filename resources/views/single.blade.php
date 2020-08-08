@extends('layouts.home')
@section('content')
<div class="row">
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="row-fluid">
    <div class="col-md-12">
      <div class="full">
        <div class="title-holder">
          <div class="title-holder-cell text-left">
            <h1 class="page-title">Shop Detail</h1>
            <ol class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">{{ $product->ProductName }}</li>
              <li>{{ $product->ProductBrand }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_detail">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2" >
              <div class='text-center'> <img class="img-responsive" src="{{ asset($product->ProductImage) }}" alt="#" /> </div><br>
              <div class='text-center'> <img class="img-responsive" src="{{ asset($product->FrontView) }}" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>{{ $product->ProductName }}</h2>
              <h5>{{ $product->ProductText }}</h2>
            </div>
            <div class="product-detail-side"> <span>Kes<del>{{ $product->SellingPrice+5000 }}</del></span><span class="new-price">Kes. {{ $product->SellingPrice }}</span> </div>
            <div class="detail-contant">
              <p>
                <span class="stock">2 in stock</span> </p>
              <form class="form" method="post" action="{{ route('cart.store') }}">
                @csrf
                <div class="quantity">
                  <input class="form-control"  type="hidden" name="ProductId" style="border-radius:30px;width:40%" value="{{ $product->ProductId }}">
                  <input step="1" min="1"  name="Quantity" value="1" title="Qty" class="form-control" size="4" type="number" style="border-radius:30px;width:40%">
                </div>
                <button type="submit" class="btn" style="background-color:gold;color:purple">Add to cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                      <p style="color:black">{!! $product->Description !!}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">             
          <div class="side_bar_blog">
          <div class="side_bar_blog">
            <h4 style="border-top:4px solid red;border-bottom:4px solid red" class="text-center">OUR SERVICES</h4>
            <div class="categary">
              <ul>
                  @foreach ($services as $item)
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i>{{ $item->Service }}</a></li>
                  @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
</div>
@endsection