<label for="grid-{{ $name ?? '' }}">{{ $name ?? '' }}</label>
<textarea
    class="border rounded appearance-none input-textarea focus:outline-none focus:bg-white{{ $classes ?? '' }}"
    name="{{ $name ?? '' }}"
    {{ $attributes }}
>{{ $content ?? 'The content is missing. Please add some content here.' }}</textarea>