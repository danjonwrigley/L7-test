<div class="card{{ ' ' . $class ?? null }}">
    <div class="card-header">{{ $cardHeader ?? 'Chart' }}</div>

    <div class="card-body">
        {!! $cardContent ?? '<p>This chart has no content!</p>' !!}
        {!! $slot !!}
    </div>
</div>