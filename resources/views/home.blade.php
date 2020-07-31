@extends('layouts.app')

@section('content')
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-envelope"></i> Total Messages</span>
              <div class="count">0</div>
              <span class="count_bottom"><i class="green"><a href="#">Read Messages</a></i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-wrench"></i> Services</span>
              <div class="count">1235</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-scissors"></i> Skills</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Contact</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Counter</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Quotes</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Product Categories</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Orders</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Sold Products</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Stock Available</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Processed Orders</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Shopping Cart</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> WishListed Products</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Users</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Appoinments</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Social Icons</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Payments</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Reviews</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><a href="#"><i class="green"><i class="fa fa-eye"></i></i>View</a></span>
              </div>
          </div>
          <!-- /top tiles -->
          <hr/>
</div>
@endsection
