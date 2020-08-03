@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <h1>Say hello to a: {{ $user->name ?? null }}</h1>    
    <p>This is the users name: {{ $user->name ?? null }}</p>
@endpush