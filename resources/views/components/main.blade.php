<main class="{{ $class ?? null }}">
    {{ $slot }}
    @stack('main')
</main>