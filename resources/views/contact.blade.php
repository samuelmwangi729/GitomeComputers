@extends('layouts.home')
@section('content')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Contact Us</h1>
                <ol class="breadcrumb">
                  <li><a href="/">{{ config('app.name') }}</a></li>
                  <li class="active">Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
<div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="full">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if($errors->all())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Your Quotation Form Has Errors.Kindly Correct the errors and Try Again</strong>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('success') }}
                </div>
                @endif
                <div class="main_heading text_align_center">
                  <h2 style="color:black">GET IN TOUCH</h2>
                </div>
              </div>
              <div class="contact_information">
                @foreach ($contacts as $contact) 
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                    <div class="information_bottom text_align_center">
                      <div class="icon_bottom"> 
                       @if($contact->Type=='Mobile')
                       <i class="fa fa-phone" aria-hidden="true"></i>

                    </div>
                    <div class="info_cont">
                        <h5>Get Us on </h5>
                      <h4>{{ $contact->Address }}</h4>
                      <p>Mon-Fri 8:30am-6:30pm</p>
                    </div>
                       @elseif($contact->Type=='Building')
                       <i class="fa fa-university" aria-hidden="true" style="color:Red !important"></i>
                    </div>
                    <div class="info_cont">
                        <h5>Get Us At </h5>
                      <h4>{{ $contact->Address }}</h4>
                      <p>Mon-Fri 8:30am-6:30pm</p>
                    </div>
                    @else
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="info_cont">
                    <h5>Send An Email </h5>
                  <h4>0011 234 56789</h4>
                  <p>Anytime 24/7 Availability</p>
                </div>
                      @endif
                    </div>
                  </div>
                @endforeach
              <div class="col-sm-6 offset-sm-3 contant_form">
                <h2 class="text_align_center" style="color:black">Request A Quote from Us</h2>
                <div class="form_section">
                  <form class="form_contant" action="{{ route('quotes') }}" method="POST">
                    @csrf
                    <fieldset>
                    <div class="row">
                      <div class="form-group col-sm-12">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Names">
                          @error('name') 
                          <span style="color:red">
                          {{ $message }}
                          </span>
                          @enderror
                      </div>
                      <div class="form-group col-sm-12">
                          <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email Address">
                          @error('email') 
                          <span style="color:red">
                          {{ $message }}
                          </span>
                          @enderror
                      </div>
                      <div class="form-group col-sm-12">
                        <input type="number" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number">
                        @error('phone') 
                        <span style="color:red">
                        {{ $message }}
                        </span>
                        @enderror
                    </div>
                      <div class="col-sm-12">
                        <textarea class="form-control  @error('message') @enderror" style="height:200px"  placeholder="Your Message" name="message"></textarea>
                        @error('message') 
                        <span style="color:red">
                        {{ $message }}
                        </span>
                        @enderror
                      </div>
                      <button class="btn main_bt" type="submit">Request Quote</button>
                    </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop