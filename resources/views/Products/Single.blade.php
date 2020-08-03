@extends('layouts.app')
@section('content')
<div class="row">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>{{ $product->ProductText }}</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="col-md-7 col-sm-7 ">
              <div class="product-image">
                <img src="{{ asset($product->ProductImage) }}" alt="..." />
              </div>
              <div class="product_gallery">
                <a>
                    <img src="{{ asset($product->FrontView) }}" alt="..." />
                </a>
              </div>
            </div>

            <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

              <h3 class="prod_title">{{ $product->ProductName }}</h3>

              <p>
                 {!!  $product->Description !!}
            </p>
              <br>
              <br />
              <br />

              <div class="">
                <div class="product_price">
                  <h1 class="price">Ksh {{ $product->SellingPrice }}</h1>
                  <br>
                </div>
              </div>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
</div>
@endsection