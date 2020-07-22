@extends(env('LAYOUTS_MASTER'))

@push('head')
    <link data-dump="I only show on the home page">
@endpush

@push('main')
    <div class="container">
        <x-utilities.jumbotron
            class="p-5 jumbotron-fluid"
            title="Welcome to the {{ $pageTitle }} page"
            lead="This is an experimental section with a paragraph for testing."
        />
    </div>

    <x-utilities.modal
        modalTitle="Testing a modal component"
        modalContent="This is an experimental section with a paragraph for testing."
    />
@endpush

@push('footer')
    <h3>This is the footer on the home page</h3>
@endpush
