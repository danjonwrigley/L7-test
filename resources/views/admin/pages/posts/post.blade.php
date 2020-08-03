@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <section>
        <div class="container">
            <x-utilities.jumbotron
                class="p-5 jumbotron-fluid"
                title="{{ $post->title }}"
                lead="{{ $post->sub_title ?? '' }}"
            />

            <p>{{ $post->body }}</p>
        </div>
    </section>
@endpush