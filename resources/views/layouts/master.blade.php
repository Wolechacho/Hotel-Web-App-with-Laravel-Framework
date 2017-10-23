<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

        <!-- Styles -->
        <link href="{{  asset('css/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap plug/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">


        <!--Js-->
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#">Sapphire's Hotel</a>
               </div>
               <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="/room/list">Rooms</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
    </nav>

        @yield('content')
        <footer>
            COPYRIGHT @ 2017 sapphire's Hotel 
        </footer>   
    </body>
</html>
