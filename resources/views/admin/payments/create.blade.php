@extends(env('LAYOUTS_MASTER'))

@push('main')
    <p>Hello World</p>

    <form action="">
        <input class="form-control btn btn-md btn-primary" type="submit" value="Pay!">
    </form>
@endpush
