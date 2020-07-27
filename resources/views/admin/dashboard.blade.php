@extends(env('LAYOUTS_MASTER'))

@auth
    @push('head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush

    @push('main')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <x-utilities.cards.full-width
                        cardHeader="Dashboard"
                        cardTitle="Some title for a card"
                        cardText="You are logged in!"
                    />
                </div>
            </div>
        </div>
    @endpush
@endauth

@guest
    @push('main')
        <x-utilities.alert
            alerttype='warning'
            alertTitle='Forbidden'
            alertSubtitle='You are not allowed to access this area unless logged in!.'
        />
    @endpush
@endguest
