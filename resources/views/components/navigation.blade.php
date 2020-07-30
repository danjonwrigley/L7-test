<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <a class="navbar-brand">Xbite</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
            <a class="nav-item nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            
            {{ $slot }}
            @stack('navigation')
        </div>

        <div class="navbar-nav ml-auto">
            @guest
                <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
                <a class="nav-item nav-link disabled">Welcome {{ Auth::user()->name }}&nbsp;</a>
                <a class="nav-item nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                <a class="nav-item nav-link disabled"> &#124; </a>
                <a class="nav-item nav-link" href="{{ route('logout') }}">{{ __('Logout') }}</a>
            @endguest
        </div>
    </div>
</nav>