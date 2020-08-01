            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        <li><a href="#">Users</a></li>
                        <li><a href="index3.html">Products</a></li>
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
                        <li><a href="{{ route('contacts.index') }}">Add Service</a></li>
                      </ul>
                    </li>
                    <!--end COntact-->
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">General Form</a></li>
                        <li><a href="form_advanced.html">Advanced Components</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="form_wizards.html">Form Wizard</a></li>
                        <li><a href="form_upload.html">Form Upload</a></li>
                        <li><a href="form_buttons.html">Form Buttons</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>  
              </div>
              <!-- /sidebar menu -->