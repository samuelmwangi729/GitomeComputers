@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="text-center">Order Details</h3>
            </div>
            <form>
              <fieldset>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="FirstName" class="form-control" value="{{ $order->FirstName }}"  readonly>
                                                    </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                          <input type="text" name="LastName" placeholder="Last Name" class="form-control" value="{{ $order->LastName }}"  readonly>
                                                </div>
                  </div>
                  
                  <div class="col-sm-12">
                      <div class="form-group">
                          <input type="text" name="CompanyName" placeholder="Company Name/ Optional" class="form-control" value="{{ $order->Company }}"  readonly>
                                                </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                    <select class="form-control " name="County" readonly>
                        <option label="Select Your  County"></option>
                        <option selected>Nyandarua County</option>
                    </select>
                                            </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" name="Town" class="form-control " placeholder="Your Home Town" value="{{ $order->Town }}"  readonly>
                                            </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" name="PostalCode" class="form-control " placeholder="Town Postal Code" value="{{ $order->PostalCode }}"  readonly>
                                            </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                    <textarea  class="form-control " name="Address" placeholder="Your Address"   readonly>{{ $order->Address }}</textarea>
                                            </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="number" name="Phone" class="form-control " placeholder="Phone Number" value="{{ $order->Phone }}"  readonly>
                                            </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control " placeholder="Email Address" value="{{ $order->Email }}"  readonly>
                                            </div>
                </div>
                
                  </div>
              </fieldset>
            </form>
            @if($order->Status==0)
            <button class="btn btn-danger">
                Pending...
            </button>
            @else
            <button class="btn btn-success">
                Processed
            </button>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="text-center">Products In the Order</h3>
            </div>
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>ProductName</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $cart)
                    <tr>
                        <td><a href="{{ route('products.show',[ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->id]) }}">
                            {{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductName }} {{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductText }}    
                        </a></td>
                        <td>{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice }}</td>
                        <td>
                            {{ $cart->Qty }}
                        </td>
                        <td>{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice* $cart->Qty }}</td>
                    </tr>                        
                    @endforeach
                    <tr>
                        <td class="text-right" colspan="5">
                         Grand Total :    {{ $total }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop