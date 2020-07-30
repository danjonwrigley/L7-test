<div id="content" class="w-full lg:w-10/12 p-2 lg:p-8 {{ $class ?? '' }}">
    {{ $slot }}
    @stack('content')
</div>