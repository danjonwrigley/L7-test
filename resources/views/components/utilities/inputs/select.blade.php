<select
    class="border rounded input-select focus:outline-none focus:bg-white focus:border-gray-500"
    id="grid-{{ $name ?? $id }}"
    name="{{ $name ?? $id }}"
>
    @foreach ($options as $option)
        @if ($option->id === $selected)
            <option selected>{{ $option->name }}</option>
        @else
            <option>{{ $option->name }}</option>
        @endif
    @endforeach
</select>

<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
    </svg>
</div>