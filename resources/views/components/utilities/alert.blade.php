<div class="alert alert-{{ $alertType ?? '' }}" role="alert">
    <h4 class="alert-heading">{{ $alertTitle ?? '' }}</h4>
    @if ($alertSubtitle)
        <h2 class="align-self-center">{{ $alertSubtitle ?? '' }}</h2>
    @endif
</div>