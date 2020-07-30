<div class="jumbotron {{ $fluid ?? '' ? 'jumbotron-fluid' : '', $class ?? null }}">
    <div class="{{ $fluid ?? '' ? 'container-fluid' : 'container' }}">
        <h1 class="{{ $titleClass ?? 'text-2xl sm:text-4xl md:text-4xl' }}">{{ $title ?? null }}</h1>
        <p class="lead">{{ $lead ?? null }}</p>
    </div>
</div>