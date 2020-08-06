@extends('layouts.app')

@section('content')
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-envelope"></i> Total Messages</span>
              <div class="count">{{ $messages }}</div>
              <span class="count_bottom"><i class="green"><a href="{{ route('messages.index') }}">Read Messages</a></i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-wrench"></i> Services</span>
              <div class="count">{{ $services }}</div>
              <span class="count_bottom"><i class="green"></i> <a href="{{ route('services.index') }}">View Services</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-cogs"></i> Brands</span>
              <div class="count green">{{ $brands }}</div>
              <span class="count_bottom"><a href="{{ route('brands.index') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Quotes</span>
              <div class="count">{{ $quotes }}</div>
              <span class="count_bottom"><a href="{{ route('quotes.index') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Product Categories</span>
                <div class="count">{{ $categories }}</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-cogs"></i> Products</span>
                <div class="count">{{ $products }}</div>
                <span class="count_bottom"><a href="{{ route('products.index') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Orders</span>
                <div class="count">{{ $orders }}</div>
                <span class="count_bottom"><a href="{{ route('orders.all') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Processed Orders</span>
                <div class="count">{{ $processedOrders }}</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Users</span>
                <div class="count">{{ $users }}</div>
                <span class="count_bottom"><a href="/users"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Appoinments</span>
                <div class="count">{{ $appointments }}</div>
                <span class="count_bottom"><a href="{{ route('appointments.all') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Social Icons</span>
                <div class="count">{{ $icons }}</div>
                <span class="count_bottom"><a href="{{ route('platforms.index') }}"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
          </div>
          <!-- /top tiles -->
          <hr/>
</div>
@endsection
