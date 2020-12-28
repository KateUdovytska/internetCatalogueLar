<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('messages.catalogue')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .logo {
            height: 100px;
            width: 120px;
            margin: -30px 0;
        }

        .productTable {
            width: 80%;
            height: auto;
            margin-left: 10%;
            background-color: #f5f5f5;

        }

        .thead-dark {
            background-color: #3daeb9;
            color: #ffffff;

        }

        footer {
            color: #ffffff;
            background: #3daeb9;
            padding: 17px 0 18px 0;
            height: 50px;
        }


    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">


            <!-- Branding Image -->
            <div class="navbar-left">
                <a class="navbar" href="{{ url('/') }}">
                    <img src="https://i.pinimg.com/originals/7f/69/3e/7f693e0563f7334a1683db3deeeb89f3.png" alt="logo"
                         class="logo">
                </a>
            </div>
        </div>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('locale','ru')}}">Ru</a></li>
            <li><a href="{{route('locale','en')}}">En</a></li>

        </ul>
        </ul>
    </div>
    </div>
</nav>

@yield('content')
<footer class="navbar-fixed-bottom text-center">
    &copy; jun-2020
</footer>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
