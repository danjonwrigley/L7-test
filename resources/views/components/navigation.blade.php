<nav class="shadow-sm navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand">{{ env('BRAND_TEXT') }}</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto navbar-nav">
            <a class="nav-item nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
            <a class="nav-item nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            
            {{ $slot }}
            @stack('navigation')
        </div>

        <div class="ml-auto navbar-nav">
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