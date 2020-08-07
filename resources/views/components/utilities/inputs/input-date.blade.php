<input
    class="input-date border rounded focus:outline-none focus:bg-white focus:border-gray-500{{ $classes ?? null }}"
    id="grid-{{ $name ?? null }}"
    type="date"
    value="@if (empty(!$date)){{ date('Y-m-d', strtotime($date)) ?? '' }}@endif"
    min="{{ $minDate ?? '2018-01-01' }}"
    max="{{ $maxDate ?? '2022-12-31' }}"
>