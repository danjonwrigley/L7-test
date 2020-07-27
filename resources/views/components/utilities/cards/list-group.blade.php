<div class="card w-1/5">
    <img class="card-img-top" src="{{ $cardImage ?? '' }}" alt="Card image cap">

    <div class="card-body">
        <h5 class="card-title">{{ $CardTitle ?? 'Card' }}</h5>
        <p class="card-text">{{ $CardText ?? 'Text needs to go here.' }}</p>
        <a href="{{ $cardLinkHref ?? '' }}" class="btn btn-primary">{{ $cardLinkText ?? '' }}</a>
    </div>

    @if ($cardFooter)
        <div class="card-header">
            <span>{{ $CardFooter ?? 'footer goes here' }}</span>
        </div>
    @endif
</div>