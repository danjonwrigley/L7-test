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

        <div class="grid grid-cols-3 gap-4">
            <x-utilities.cards.full-width
                cardHeader="No. of posts"
                cardContent="<canvas id='canvas'></canvas>"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.full-width
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.full-width
                class="col-span-3"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />

            <x-utilities.cards.full-width
                class="col-span-3"
                cardHeader="Dashboard"
                cardTitle="Some title for a card"
            />
        </div>
    @endpush

    @push('deferred')
        <script>
            let data = {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Posts',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            ctx = document.getElementById('canvas').getContext('2d'),
            myChart = new Chart(ctx, {
                type: 'bar',
                data: data,
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
