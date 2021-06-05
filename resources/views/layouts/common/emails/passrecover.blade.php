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


    <body class="">

        <h1>Your password recovery code : {{ $details['code'] }}</h1>

    </body>


    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>

   <script src="{{ asset('js/main.js') }}" ></script>






@yield('script')

</html>
