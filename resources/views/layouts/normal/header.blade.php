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

      <li class="nav-item">
        <a class="nav-link waves-effect" href ="{{ route('normal.signup') }}"><i class="mdi mdi-light mdi-18px mdi-account-plus"></i> <span class="clearfix d-none d-sm-inline-block">Sign Up</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect" href = "{{ route('normal.login') }}"><i class="mdi mdi-light mdi-18px mdi-login "></i> <span class="clearfix d-none d-sm-inline-block">Login</span></a>
      </li>

    </ul>
    <!--/Navbar links-->
  </nav>
  <!-- /.Navbar -->
