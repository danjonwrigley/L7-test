<label for="grid-title">{{ $name }}</label>
<input
    class="input-text border rounded focus:outline-none focus:bg-white focus:border-gray-500{{ $classes ?? null }}"
    id="grid-{{ $id ?? $name }}"
    name="{{ $name ?? $id }}"
    type="text"
    value="{{ $value ?? '' }}"
>