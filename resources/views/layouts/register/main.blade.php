<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>




        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/taginput/tagsinput.css') }}" rel="stylesheet">



        @yield('css')








    </head>


    <body class="fixed-sn custom-skin">

        <header>




            @include('layouts.register.sidebar')

            @include('layouts.register.header')


          </header>
          <!--Main Navigation-->

          <!-- Main layout -->
          <main>
            <div class="container-fluid">
                @yield('content')
            </div>
          </main>
          <!-- Main layout -->


            @include('layouts.register.footermenu')


          @include('layouts.register.footer')

    </body>


    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
   <script src="{{ asset('js/mdb.min.js') }}" ></script>
   <script src="{{ asset('js/main.js') }}" ></script>

   <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}" ></script>
   <script src="{{ asset('js/taginput/tagsinput.js') }}" ></script>











     <script>
      // SideNav Initialization
      $(".button-collapse").sideNav({

      });

      var container = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20,

      });



//       $(document).ready(function() {
// // SideNav Default Options
// $('.button-collapse').sideNav({
// edge: 'left', // Choose the horizontal origin
// closeOnClick: false, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
// breakpoint: 1920, // Breakpoint for button collapse
// menuWidth: 240, // Width for sidenav
// timeDurationOpen: 300, // Time duration open menu
// timeDurationClose: 200, // Time duration open menu
// timeDurationOverlayOpen: 50, // Time duration open overlay
// timeDurationOverlayClose: 200, // Time duration close overlay
// easingOpen: 'easeOutQuad', // Open animation
// easingClose: 'easeOutCubic', // Close animation
// showOverlay: true, // Display overflay
// showCloseButton: false // Append close button into siednav
// });
// });

    </script>



@yield('script')

</html>
