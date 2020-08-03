@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <p>Hello World</p>

    @php
        $brand = 'BMW';
        $array = [
            'brand' => 'ford',
            'make' => 'kuga',
            'model' => 'Finesse',
        ];
        extract($array, EXTR_PREFIX_ALL, 'brand');

        echo $brand.',', ucfirst($brand_brand).',', $brand_make.',', $brand_model.',';
    @endphp
@endpush