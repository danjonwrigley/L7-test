<div class="{{ $class ?? null }} card">
    <div class="card-header">{{ $cardHeader ?? '' }}</div>

    <div class="card-body">
        <h5 class="card-title">{{ $cardTitle ?? '' }}</h5>
        <p class="card-text">{{ $cardText ?? '' }}</p>
        {{ $slot }}
    </div>
</div>