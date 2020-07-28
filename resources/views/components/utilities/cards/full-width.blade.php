<div class="{{ $class ?? null }} card">
    <div class="card-header">{{ $cardHeader ?? '' }}</div>

    <div class="card-body">
        {!! $cardContent ?? '<p>This card is missing content</p>' !!}
        {!! $slot !!}
    </div>
</div>