<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark d-lg-none">



    <ul class="nav mr-auto">
        <li class="ml-3">

            <a class="waves-effect mt-1" href="#"><i class="mdi mdi-light mdi-home mdi-18px"></i></a>
        </li>


    </ul>
    <ul class="nav mr-center">
        <li class="">
            <a href="#" class="waves-effect mt-1 navNewItem"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin"></i></a>
        </li>


    </ul>

    {{-- <ul class="nav ml-auto">
        <li class="nav-item dropup ">
            <a class="dropdown-toggle waves-effect text-white mt-1" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-light mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-secondary dropdown-menu-right " aria-labelledby="userDropdown">

                <a class="dropdown-item waves-effect" href="{{ route('home.projectindex') }}">All</a>

                @foreach($mainmenu as $key => $menuvalue)

                <a class="dropdown-item " href="{{ route('home.mainproindex',$menuvalue->id) }}">{{$menuvalue->main_name }}</a>

                @endforeach
            </div>
        </li>


    </ul> --}}

    <ul class="nav ml-auto">
        <li class="nav-item dropup ">
            <a class="dropdown-toggle waves-effect text-white mt-1" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-light mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-secondary dropdown-menu-right " aria-labelledby="userDropdown">

                <a class="dropdown-item waves-effect" href="#">All</a>



                <a class="dropdown-item " href="#">menu</a>


            </div>
        </li>


    </ul>





</nav>
