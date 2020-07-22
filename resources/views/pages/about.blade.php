@extends(env('LAYOUTS_MASTER'))

@push('navigation')
    <a class="nav-item nav-link" href="/about">About 2</a>
@endpush

@push('main')
    <div class="container">
        <x-utilities.jumbotron
            class="p-5 jumbotron-fluid"
            title="Welcome to the {{ $pageTitle }} page"
            lead="This is an experimental section with a paragraph for testing."
        />
    </div>
@endpush
