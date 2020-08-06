@auth
    @extends(env('LAYOUTS_ADMIN'))
    
    @push('head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush

    @push('content')
        <x-utilities.jumbotron
            fluid="1"
            title="Welcome to the dashboard {{ Auth::user()->name }}"
        />

        <div class="grid grid-cols-4 gap-4 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-3">
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

            <x-utilities.cards.datatable
                class="col-span-4 lg:col-span-4 md:col-span-4 xl:col-span-2"
                cardHeader="Table"
                cardTableId="bananas"
                :cardTableData="$table"
            />

            <x-utilities.cards.content
                class="col-span-2 lg:col-span-2 md:col-span-2 xl-col-span-1"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.content
                class="col-span-2 lg:col-span-2 md:col-span-2 xl-col-span-1"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />
        </div>
    @endpush

    @push('deferred')
        <script>
            // Get the data for the required charts
            let posts = @json($charts['posts'], JSON_HEX_TAG),
                users = @json($charts['users'], JSON_HEX_TAG),
                msgs  = @json($charts['msgs'], JSON_HEX_TAG);

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

        <script>
            $(document).ready(function()
            {
                $('#bananas').DataTable({
                    'pageLength' : 5,
                    'lengthMenu' : [
                        [5, 10, 25, 50, 100, -1],
                        [5, 10, 25, 50, 100, "All"],
                    ],
                });
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
