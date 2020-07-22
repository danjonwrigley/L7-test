@extends(env('LAYOUTS_MASTER'))

@push('main')
    <h1>Say hello to a user</h1>    
{{ dump($post ?? '') }}
    <p>This is the users name: {{ $post ?? ''->body }}</p>
@endpush