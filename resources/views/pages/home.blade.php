@extends(env('LAYOUTS_MASTER'))

@push('head')
    <link data-dump="I only show on the home page">
@endpush

@push('main')
    <section>
        <div class="container">
            <x-utilities.jumbotron
                fluid="1"
                title="Welcome to the {{ $pageTitle }} page"
                lead="This is an experimental section with a paragraph for testing."
            />

            <x-utilities.cards.w-image
                cardImage="https://via.placeholder.com/150"
                cardHeader="1"
                cardTitle="Some title for a card"
                cardText="Wow! this is a card! :D"
                cardLinkHref="{{ '#' }}"
                cardLinkText="{{ 'this is a link' }}"
            />

            <x-utilities.alert
                alertType="warning"
                alertTitle="this is a warning"
                alertSubtitle="this warning means you have been warned."
            />
        </div>
    </section>

    <x-utilities.modal
        modalTitle="Testing a modal component"
        modalContent="This is an experimental section with a paragraph for testing."
    />
@endpush

@push('footer')
    <h3>This is the footer on the home page</h3>
@endpush
