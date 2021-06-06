 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav secondary-color-dark fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="#" class="pl-0">
              {{-- <img src="{{ asset('images/brainchildbd.png') }}"> --}}
            </a>

        </div>
      </li>
      <!--/. Logo -->

      <!--Search Form-->
      <li class="">
        <hr>

      </li>
      <!--/.Search Form-->
      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">




          <li>
              <a href="#" class="collapsible-header waves-effect"><i class="mdi mdi-view-dashboard-variant-outline"></i>
            Dashboards</a>

        </li>




        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-dots-horizontal-circle-outline mr-1"></i> Main Menu<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('mainmenu.create') }}" class="waves-effect">add menu</a>
                </li>
                <li><a href="{{ route('mainmenu.index') }}" class="waves-effect">menu list</a>
                </li>
                <li><a href="{{ route('mainmenu.disableindex') }}" class="waves-effect">disable list</a>
                </li>
              </ul>
            </div>

          </li>

        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-dots-vertical-circle-outline mr-1"></i> Sub Menu<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('submenu.create') }}" class="waves-effect">add submenu</a>
                </li>
                <li><a href="{{ route('submenu.index') }}" class="waves-effect">submenu list</a>
                </li>
                <li><a href="{{ route('submenu.disableindex') }}" class="waves-effect">disable list</a>
                </li>
              </ul>
            </div>

          </li>

          @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin")||(Auth::user()->type == "subadmin"))



        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-account-tie mr-1"></i> User<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>


                @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin"))

                <li>
                    <a href="{{ route('admin.usercreate') }}" class="waves-effect">add user</a>
                </li>
                @endif


                <li>
                    <a href="{{ route('admin.getnormaluserlist') }}" class="waves-effect">normal user list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getnormaluserblacklist') }}" class="waves-effect">blacklist user</a>
                </li>

                @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin"))

                <li>
                    <a href="{{ route('admin.getsubadminlist') }}" class="waves-effect">subadmin  list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getsubadminblacklist') }}" class="waves-effect">blacklist subadmin</a>
                </li>

                @endif

                @if((Auth::user()->type == "superadmin"))

                <li>
                    <a href="{{ route('admin.getadminlist') }}" class="waves-effect">admin  list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getadminblacklist') }}" class="waves-effect">blacklist admin</a>
                </li>


                @endif



              </ul>
            </div>

          </li>

          @endif


        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong" style=" background: #9933cc;"></div>
  </div>
  <!--/. Sidebar navigation -->
