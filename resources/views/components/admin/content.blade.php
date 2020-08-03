<div id="content" class="content p-4 {{ $class ?? null }}">
    {{ $slot }}
    @stack('content')
</div>