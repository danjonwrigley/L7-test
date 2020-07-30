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

        <div class="grid grid-cols-4 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-3 gap-4">
            @foreach ($charts as $chart)
                <x-utilities.cards.chart
                    class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-1"
                    cardHeader="No. of {{ $chart['name'] }}"
                    cardContent="<canvas id='{{ $chart['name'] }}' height='200'></canvas>"
                />
            @endforeach

            <x-utilities.cards.content
                class="col-span-4"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.content
                class="col-span-2 lg:col-span-2 md:col-span-1 xl:col-span-2"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.content
                class="col-span-2 lg:col-span-2 md:col-span-1 xol-col-span-1"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />
        </div>
    @endpush

    @push('deferred')
        <script>
            // Get the data for the required charts
            let posts = {!! json_encode($charts['posts'], JSON_HEX_TAG) !!},
                users = {!! json_encode($charts['users'], JSON_HEX_TAG) !!},
                msgs = {!! json_encode($charts['msgs'], JSON_HEX_TAG) !!};

            let postsTarget = document.getElementById(posts.name),
                postsChart = new Chart(postsTarget, {
                    type: posts.type,
                    data: posts.data,
                });

            let usersTarget = document.getElementById(users.name),
                usersChart = new Chart(usersTarget, {
                    type: users.type,
                    data: users.data,
                });

            let msgsTarget = document.getElementById(msgs.name),
                msgsChart = new Chart(msgsTarget, {
                    type: msgs.type,
                    data: msgs.data,
                });
        </script>
    @endpush
@endauth

@guest
    @push('content')
        <x-utilities.alert
            alertType="warning"
            alertTitle="Forbidden"
            alertSubtitle="You are not allowed to access this area unless logged in!."
        />
    @endpush
@endguest
