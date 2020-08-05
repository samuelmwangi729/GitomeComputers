@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row" style="margin-bottom:100px">
        <div class="col-md-8">
          <div class="checkout-form" >
            <form action="{{ route('orders.store') }}" method="post">
                @csrf
              <fieldset>
                  <legend class="text-center">Please FIll Your Shipping Details</legend>
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
                  {{-- End COl-sm-6 --}}
                  <div class="col-sm-12">
                      <div class="form-group">
                          <input type="text" name="CompanyName" placeholder="Company Name/ Optional" class="form-control @error('CompanyName') is-invalid @enderror">
                          @error('CompanyName')
                          <span style="color:red">{{ $message }}</span>
                          @enderror
                      </div>
                  </div>
                  {{-- End COl-sm-12--}}
                  <div class="col-sm-12">
                    <div class="form-group">
                    <select class="form-control @error('County') is-invalid @enderror" name="County">
                        <option label="Select Your  County"></option>
                        <option>Nyandarua County</option>
                    </select>
                        @error('County')
                        <span style="color:red">
                        Select Your County
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12 --}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" name="Town" class="form-control @error('Town') is-invalid @enderror" placeholder="Your Home Town">
                        @error('Town')
                        <span style="color:red">
                        Your Town Is Required
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12--}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" name="PostalCode" class="form-control @error('PostalCode') is-invalid @enderror" placeholder="Town Postal Code">
                        @error('PostalCode')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- End COl-sm-12--}}
                <div class="col-sm-12">
                    <div class="form-group">
                    <textarea  class="form-control @error('Address') is-invalid @enderror" name="Address" placeholder="Your Address"></textarea>
                        @error('Address')
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
                <button type="submit" style="background-color:gold;color:purple;padding:4px">Complete CheckOut</button>
                  </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shopping-cart-cart">
            <table>
              <tbody>
                <tr class="head-table">
                  <td><h5>Cart Totals</h5></td>
                  <td class="text-right"></td>
                </tr>
                <tr>
                  <td><h4>Subtotal</h4></td>
                  <td class="text-right"><h4>Kes. {{ $totals }}</h4></td>
                </tr>
                <tr>
                  <td><h5>Estimated shipping</h5></td>
                  <td class="text-right"><h4>Kes. 0.00</h4></td>
                </tr>
                <tr>
                  <td><h3>Total</h3></td>
                  <td class="text-right"><h4>{{ $totals }}</h4></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
</div>
@stop