<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Outsrc Intranet</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/parque/style.css') }}" rel="stylesheet">
</head>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Intranet
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('domains') }}">Domains</a></li>
                    <li><a href="{{ url('hosts') }}">Hosts</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (Session::has('flash_message'))
            <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
                @if (Session::has('flash_message_important'))
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                @endif
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @yield('content')
        <header id="masthead" class="site-header bg-hojas padding-40-0 alto-100" role="banner"> 
        <div id="navbar" class="navbar max-1280 margin-auto relative">
				
            <a href="https://parquedelrecuerdo.cl">
            <img class="logo" src="https://parquedelrecuerdo.cl/wp-content/themes/parquedelrecuerdo/images/logo.png">
            </a>
            
            <div id="nav-icon3">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            
        </div>
    </header><!-- #masthead -->