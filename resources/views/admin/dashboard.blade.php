@extends(env('LAYOUTS_ADMIN'))

@auth
    @push('head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush

    @push('content')
        <x-utilities.jumbotron
            fluid="1"
            title="Welcome to the dashboard {{ Auth::user()->name }}"
        />

        <div class=" grid grid-cols-3 gap-4">
            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
                cardText="You are logged in!"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
                cardText="You are logged in!"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
                cardText="You are logged in!"
            />

            <x-utilities.cards.full-width
                class="col-span-3"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
                cardText="You are logged in!"
            />

            <x-utilities.cards.full-width
                class="col-span-3"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
                cardText="You are logged in!"
            />
        </div>
    @endpush
@endauth

@guest
    @push('content')
        <x-utilities.alert
            alerttype='warning'
            alertTitle='Forbidden'
            alertSubtitle='You are not allowed to access this area unless logged in!.'
        />
    @endpush
@endguest
