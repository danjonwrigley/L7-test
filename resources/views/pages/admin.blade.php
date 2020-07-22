@extends(env('LAYOUTS_MASTER'))

@auth
    @push('head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush

    @push('main')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <p>You are logged in!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endpush
@endauth

@guest
    @push('content')
        @alerts([
            'type'     => 'warning',
            'title'    => 'Forbidden',
            'subtitle' => 'Whenever you need to, be sure to use margin utilities to keep things nice and tidy.'
        ])
            You are not allowed to access this area unless logged in!
        @endalerts
    @endpush
@endguest
