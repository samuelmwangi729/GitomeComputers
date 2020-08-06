            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        @if(Auth::user()=='Administrator')
                        <li><a href="{{ route('users.index') }}">Users</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                      </ul>
                    </li>
                    <!--Start Messages-->
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('roles') }}">User Roles</a></li>
                          <li><a href="{{ route('users.add') }}">Add User</a></li>
                          <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                        </ul>
                      </li>
                    <!--End Messages-->
                    <!--Start Messages-->
                    <li><a><i class="fa fa-envelope"></i> Messages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('messages.index') }}">Received Message</a></li>
                        </ul>
                      </li>
                    <!--End Messages-->
                    <!--Start Services-->
                    <li><a><i class="fa fa-wrench"></i> Services <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('services.index') }}">Add Service</a></li>
                      </ul>
                    </li>
                    {{-- End Services --}}
                    <!--Start COntact-->
                    <li><a><i class="fa fa-map-marker"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('contacts.index') }}">Add Contacts</a></li>
                      </ul>
                    </li>
                    <!--end COntact-->
                    <!--Start Quotes-->
                    <li><a><i class="fa fa-question"></i> Quotes <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('quotes.index') }}">View Quotes</a></li>
                      </ul>
                    </li>
                    <!--End Quote-->
                    {{-- Start Products Categories --}}
                    <li><a><i class="fa fa-sitemap"></i> Product Categories <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('categories.index') }}">Add Categories</a></li>
                      </ul>
                    </li>
                    {{-- Stop Product Categories --}}
                    {{-- Start Products Sidebar --}}
                    <li><a><i class="fa fa-qrcode"></i> Products <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('brands.index') }}">Products Brands</a></li>
                        <li><a href="{{ route('products.index') }}">View Products</a></li>
                        <li><a href="{{ route('products.create') }}">Add Products</a></li>
                      </ul>
                    </li>
                    {{-- End products menu --}}
                    {{-- Start SHop Sidebar --}}
                    <li><a><i class="fa fa-hourglass"></i> Shop <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('shops.create') }}">View Shop Slider</a></li>
                        <li><a href="{{ route('shops.index') }}">Create Slider</a></li>
                        <li><a href="{{ route('products.index') }}"></a></li>
                        <li><a href="{{ route('products.create') }}">Add Products</a></li>
                      </ul>
                    </li>
                    @endif
                 <li onclick="document.getElementById('logout-form').submit()"><a><i class="fa fa-power-off"></i> Logout <span class="fa fa-chevron-right"></span></a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
                    {{-- End Shop Menu --}}
                  </ul>
                </div>  
              </div>
              <!-- /sidebar menu -->