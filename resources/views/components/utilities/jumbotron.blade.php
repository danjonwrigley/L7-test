<div class="p-5 jumbotron {{ $fluid ?? '' ? 'jumbotron-fluid' : '', $class ?? null }}">
    <div class="{{ $fluid ?? '' ? 'container-fluid' : 'container' }}">
        <h1 class="{{ $titleClass ?? 'display-4' }}">{{ $title ?? null }}</h1>
        <p class="lead">{{ $lead ?? null }}</p>
    </div>
</div>