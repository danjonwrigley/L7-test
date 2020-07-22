@extends(env('LAYOUTS_MASTER'))

@push('main')
    <h1>Say hello to a user</h1>    
{{ dump($user ?? '') }}
    <p>This is the users name: {{ $user ?? '' ?? ''->name }}</p>
@endpush