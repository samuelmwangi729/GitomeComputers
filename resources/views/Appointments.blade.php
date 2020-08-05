@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row" style="margin-bottom:100px">
        <div class="col-md-8 offset-md-1">
          <div class="checkout-form" >
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
              <fieldset>
                  <legend class="text-center">Please FIll Your  Details</legend>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="FirstName" placeholder="First Name" class="form-control @error('FirstName') is-invalid @enderror">
                            @error('FirstName')
                            <span style="color:red">
                            Kindly Input Your First Name
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- End COl-sm-6 --}}
                    <div class="col-sm-6">
                      <div class="form-group">
                          <input type="text" name="LastName" placeholder="Last Name" class="form-control @error('LastName') is-invalid @enderror">
                          @error('LastName')
                          <span style="color:red">Your Last Name Is Missing</span>
                          @enderror
                      </div>
                  </div>
                  
                  {{-- End COl-sm-12--}}
                  <div class="col-sm-12">
                    <div class="form-group">
                    <select class="form-control @error('Day') is-invalid @enderror" name="Day">
                        <option label="Select A Day"></option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                    </select>
                        @error('Day')
                        <span style="color:red">
                     {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12 --}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="month" name="Month" class="form-control @error('Month') is-invalid @enderror" >
                        @error('Month')
                        <span style="color:red">
                       {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12--}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="time" name="Time" class="form-control @error('Time') is-invalid @enderror">
                        @error('Time')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                 {{-- End COl-sm-12--}}
                 <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" name="Topic" class="form-control @error('Topic') is-invalid @enderror" placeholder="Choose A Topic">
                        @error('Topic')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12--}}
                <div class="col-sm-12">
                    <div class="form-group">
                    <textarea  class="form-control @error('Message') is-invalid @enderror" name="Message" placeholder="Your Message To Our Specialists"></textarea>
                        @error('Message')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12--}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="number" name="Phone" class="form-control @error('Phone') is-invalid @enderror" placeholder="Phone Number">
                        @error('Phone')
                        <span style="color:red">
                        Your Phone Number is Missing
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-6--}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror" placeholder="Email Address">
                        @error('Email')
                        <span style="color:red">  Your Email Address  is Missing</span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-6--}}
                <div class="col-sm-12">
                    <div class="form-group">
                        Add A Captcha Here
                    </div>
                </div>
                <button type="submit" style="background-color:gold;color:purple;padding:4px">Book Appointment</button>
                  </div>
              </fieldset>
            </form>
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
@stop