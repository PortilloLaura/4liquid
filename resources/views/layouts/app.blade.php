<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SAPI</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="header2">
        @auth
            <div class="slogan">
                <a class="slogan" href="{{ route('home')}}">
				    <img src="{{ url('img/general/SAPI.png')}}">
                    <span class="namePage">SAPI</span>
                </a>
            </div>
        @endauth
        @guest
            <div class="slogan">
                <a class="slogan" href="{{ route('welcome')}}">
				    <img src="{{ url('img/general/SAPI.png')}}">
                    <span class="namePage">SAPI</span>
                </a>
            </div>
        @endguest
			<a class="header_link" href="{{ route('nosotros')}}">Acerca De</a>
			<a class="header_link" href="{{ route('proyectos')}}">Proyectos</a>
            @can('users.index')
            <a class="header_link" href="{{ route('users.index')}}">Usuarios</a>
            @endcan
            @can('roles.index')
            <a class="header_link" href="{{ route('roles.index')}}">Roles</a>
            @endcan
            <ul>
                        @guest
                            
                                <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @if (Route::has('register'))
                                
                                    <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
                                    <a class="link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                    </ul>
		</div>
        

        @if (session('info'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
        @endif
            @yield('content')
        
</body>
</html>
