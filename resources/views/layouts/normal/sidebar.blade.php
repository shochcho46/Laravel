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
              <a href="#" class="collapsible-header waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i>
            menu</a>
        </li>

            {{-- <li>
                <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
                MENU
                <i class="fas fa-angle-down rotate-icon"></i>
                </a>

              <div class="collapsible-body">
                <ul>
                    <li>
                        <a class=" waves-effect" href="{{ route('reguser.projectindex') }}">All</a>
                    </li>
                    @foreach($mainmenu as $key => $menuvalue)

                    <li>
                        <a href="{{ route('reguser.mainproindex',$menuvalue->id) }}" class="waves-effect">{{$menuvalue->main_name }}</a>
                    </li>



                    @endforeach


                </ul>
              </div>

            </li> --}}



          <hr>

          <li>
              <a href="#" class="collapsible-header waves-effect"><i class="fas fa-tachometer-alt"></i>
            Dashboards</a>

        </li>




        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i> MY Menu<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="#" class="waves-effect">menu 1</a>
                </li>
                <li><a href="#" class="waves-effect">menu 2</a>
                </li>
                <li><a href="#" class="waves-effect">menu 3</a>
                </li>
              </ul>
            </div>

          </li>




        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong didcolor" style=" background: #9933cc;"></div>
  </div>
  <!--/. Sidebar navigation -->
