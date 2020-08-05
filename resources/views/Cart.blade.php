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
                <h1 class="page-title">Shopping Cart</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1 Shopping_cart_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="product-table">
            <table class="table table-condensed  table-striped table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th class="text-center">Price/Unit</th>
                  <th class="text-center">Total</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                 @if(count($carts)==0)
                 <tr>
                   <td colspan="5" class="text-center">
                     <div class="alert alert-danger">
                       <strong>Cart Is Currently Empty</strong>
                     </div>
                   </td>
                 </tr>
                 @else
                 @foreach ($carts as $cart)
                 <tr>
                   <td class="col-sm-5 col-md-5"><div class="media"> <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="{{ asset(App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductImage) }}" alt="#" style="height:100px">
                     </a>
                       <div class="media-body">
                         <h4 class="media-heading"><a href="#">{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductName }}</a></h4>
                     </div></td>
                   <td class="col-sm-3 col-md-3" style="text-align:center;">
                       <p class="price_table">{{ $cart->Qty }} Pieces</p>
                   </td>
                   <td class="col-sm-2 col-md-2 text-center"><p class="price_table">Ksh .{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice }}</p></td>
                   <td class="col-sm-1 col-md-1 text-center"><p class="price_table">Ksh .{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice * $cart->Qty }}</p></td>
                   <td class="col-sm-1 col-md-1">
                       <i class="fa fa-trash" style="color:red;padding-top:45px" onclick="document.getElementById('delete').submit()"></i>
                       <form method="post" action="{{ route('cart.destroy',[$cart->id]) }}" id="delete">
                         @csrf
                         @method('DELETE')
                       </form>
                 </tr>    
                 @endforeach
                 @endif
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <td>
                      <div class="row">
                          <div class="col-sm-6 col-md-6">
                              <div class="row-group">
                                  <input type="text" class="form-control" name="Coupon" placeholder="Enter Coupon Code" style="margin-top:20px">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-6">
                            <button class="btn btn-success btn-sm">Apply Coupon</button>
                        </div>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="shopping-cart-cart">
            <table class="table table-condensed table-striped table-bordered">
              <tbody>
                <tr class="head-table">
                  <td><h5>Cart Totals</h5></td>
                  <td class="text-right"></td>
                </tr>
                <tr>
                  <td><h4>Subtotal</h4></td>
                  <td class="text-right"><h4>{{ $totals }}</h4></td>
                </tr>
                <tr>
                  <td><h5>Estimated shipping</h5></td>
                  <td class="text-right"><h4>Kes. 0.00</h4></td>
                </tr>
                <tr>
                  <td><h3>Total</h3></td>
                  <td class="text-right"><h4>{{ $totals }}</h4></td>
                </tr>
                <tr>
                  <td>
                    <span style="border:10px">
                    <button style="background-color:gold;color:purple;font-weight:bold;" onclick="window.open('{{ route('shop') }}','_parent')">    <i class="fa fa-cart-plus"></i> Continue Shopping</button>
                    </span>
                </td>
                  <td>   
                    <button style="background-color:gold;color:purple;font-weight:bold" onclick="window.open('{{ route('checkout') }}','_parent')">  <i class="fa fa-credit-card"></i> CheckOut</button>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
</div>
@endsection