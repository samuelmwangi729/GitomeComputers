@extends('layouts.home')
@section('content')
<div class="row">
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
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
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_detail">
    <div class="container">
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
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                  Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br>
                  <span class="stock">2 in stock</span> </p>
                <form class="form" method="post" action="#">
                  <div class="quantity">
                    <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="form-control" size="4" type="number" style="border-radius:30px;width:40%">
                  </div>
                  <button type="submit" class="btn" style="background-color:gold;color:purple">Add to cart</button>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
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
              <h4>OUR SERVICES</h4>
              <div class="categary">
                <ul>
                    <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                    <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                    <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                    <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                    <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                    <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                    <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                    <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                    <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                    <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
</div>
@endsection