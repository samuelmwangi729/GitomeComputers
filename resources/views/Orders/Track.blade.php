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
                  <li class="active">Order</li>
                  <li>Track</li>
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
            <div class="checkout-form" >
                <form action="{{ route('orders.check') }}" method="post">
                    @csrf
                  <fieldset>
                      <legend class="text-center">Please FIll Your Shipping Details</legend>
                      <div class="row">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="form-group">
                                <input type="text" name="OrderId" placeholder="OrderId or Your Email Address" class="form-control @error('OrderId') is-invalid @enderror">
                                @error('OrderId')
                                <span style="color:red">
                               {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    {{-- End COl-sm-6--}}
                    <div class="col-sm-6 offset-sm-3">
                        <div class="form-group">
                            Add A Captcha Here
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3">
                        <button type="submit" style="background-color:gold;color:purple;padding:4px">Check Order</button>
                    </div>
                      </div>
                  </fieldset>
                </form>
                @if(Session::has('order'))
                @if(Session::get('order')->Status==0)
                <div class="alert alert-warning">
                    <strong>Your Order Is Yet to be Processed</strong>
                </div>
                @else
                <div class="alert alert-success">
                    <strong>Your Order Has Been Processed. We will contact you shortly</strong>
                </div>
                @endif
                @endif
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
  </div>
  <!-- end section -->
</div>
@endsection