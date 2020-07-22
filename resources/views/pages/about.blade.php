@extends(env('LAYOUTS_MASTER'))

@push('navigation')
    <a class="nav-item nav-link" href="/about">About 2</a>
@endpush

@push('main')
    <h1>Welcome to the {{ $pageTitle }} page</h1>
@endpush
