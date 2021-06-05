<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark">



    <!-- SideNav slide-out button -->

    <div class=" clearfix d-xxl-none float-left">
      <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="mdi mdi-menu"></i></a>
    </div>



    <a class="navbar-brand ml-2 mr-auto" href="#"><b><i>Logo</i></b></a>



    <!-- Breadcrumb-->


    <ul class="nav navbar-nav nav-flex-icons ml-auto ">

        <li class="clearfix nav-item navNewItem navNewItemPadding d-none d-lg-block">
            <a href="#" class=" nav-link waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin"></i> <span class="clearfix d-none d-sm-inline-block"><i>menu</i></span></a>
        </li>



        <li class="clearfix nav-item dropdown navNewItemPadding d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-light mdi-dots-vertical"></i> <span class="clearfix d-none d-sm-inline-block">MENU</span></a>
            </a>
            <div class="dropdown-menu  dropdown-menu-left" aria-labelledby="userDropdown">
              <a class="dropdown-item waves-effect" href="#">All</a>
              {{-- @foreach($mainmenu as $key => $menuvalue)
              <a class="dropdown-item" href="{{ route('home.mainproindex',$menuvalue->id) }}">{{$menuvalue->main_name  }}</a>

              @endforeach --}}
              <a class="dropdown-item" href="#">test</a>


            </div>
        </li>


    </ul>

    <ul class="nav navbar-nav nav-flex-icons ml-auto">


    </ul>


    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      <!-- Dropdown -->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">

          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
        </a>
        <div class="dropdown-menu dropdown-secondery dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="mdi mdi-cogs" aria-hidden="true"></i> Profile Setting</a>
            <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout" aria-hidden="true"></i> Log Out</a>
        </div>
      </li>

    </ul>
    <!--/Navbar links-->
  </nav>
  <!-- /.Navbar -->
