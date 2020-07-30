<aside class="sidebar hidden lg:flex {{ $class ?? '' }}">
    <nav class="nav flex-column w-full">
        <a class="nav-linked-odd" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
        <a class="nav-linked" href="{{ route('users') }}">{{ __('Users') }}</a>
        <a class="nav-linked-odd" href="{{ route('posts') }}">{{ __('Posts') }}</a>
        {{-- <a class="nav-linked" href="{{ route('notifications') }}">{{ __('notifications') }}</a> --}}
    </nav>
</aside>