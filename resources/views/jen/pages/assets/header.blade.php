<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Self Pay Net</title>

        <meta content="" name="description" />
        <meta content="" name="keywords" />
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <link href="{{ asset('jen/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/venobox/venobox.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('jen/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('jen/assets/css/style.css') }}" rel="stylesheet" />
    </head>

    <body>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <img src="{{ asset('jen/assets/img/logo.png') }}" width="200px;" />
                <h1 class="logo mr-auto"><a href="index.html"></a></h1>

                <nav class="nav-menu d-none d-lg-block">
                    <ul style="margin-right:-300px;">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('about') }}">About Us</a></li>
                        @if (!Auth::check())
                        <li><a href="{{ url('registers') }}">Register</a></li>
                        @endif @if (!Auth::check())
                        <li><a href="{{ url('login') }}">Login</a></li>
                        @endif @if (Auth::check() )

                        <li class="drop-down">
                            <a href="">{{ auth()->user()->name }}</a>
                            <ul>
                                @if(Auth::user()->isDoctor())
                                <li><a href="{{ url('profile/') }}">Profile</a></li>
                                @endif
                                
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>
